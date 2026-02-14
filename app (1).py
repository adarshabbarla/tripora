from flask import Flask, request, jsonify, render_template, session, redirect, url_for

import sqlite3

app = Flask(__name__)
app.secret_key = "super-secret-key"


# ---------- DATABASE ----------
def get_db():
    conn = sqlite3.connect("database.db")
    conn.row_factory = sqlite3.Row
    return conn

def init_db():
    conn = get_db()
    conn.execute("""
        CREATE TABLE IF NOT EXISTS expenses (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            date TEXT,
            category TEXT,
            note TEXT,
            amount REAL
        )
    """)
    conn.execute("""
        CREATE TABLE IF NOT EXISTS budget (
            id INTEGER PRIMARY KEY,
            amount REAL
        )
    """)
    conn.execute("""
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT UNIQUE,
        password TEXT
    )
""")

    conn.commit()
    conn.close()

init_db()

# ---------- PAGES ----------
@app.route("/")
def login_page():
    return render_template("index.html")

@app.route("/signup")
def signup_page():
    return render_template("signup.html")

@app.route("/dashboard")
def dashboard_page():
    if "user" not in session:
        return redirect(url_for("login_page"))
    return render_template("dashboard.html")


# ---------- AUTH (DUMMY – FRONTEND ONLY) ----------
@app.route("/api/login", methods=["POST"])
def login_api():
    data = request.json
    email = data.get("email")
    password = data.get("password")

    if not email or not password:
        return jsonify({"success": False, "message": "Missing fields"})

    conn = get_db()
    user = conn.execute(
        "SELECT * FROM users WHERE email=? AND password=?",
        (email, password)
    ).fetchone()
    conn.close()

    if user:
        session["user"] = email   # ✅ LOGIN STORED
        return jsonify({"success": True})
    else:
        return jsonify({"success": False, "message": "Invalid credentials"})


@app.route("/api/signup", methods=["POST"])
def signup_api():
    data = request.json
    email = data.get("email")
    password = data.get("password")

    if not email or not password:
        return jsonify({"success": False, "message": "Missing fields"})

    conn = get_db()
    try:
        conn.execute(
            "INSERT INTO users (email, password) VALUES (?, ?)",
            (email, password)
        )
        conn.commit()
    except sqlite3.IntegrityError:
        conn.close()
        return jsonify({"success": False, "message": "User already exists"})

    conn.close()
    return jsonify({"success": True})


@app.route("/api/logout", methods=["POST"])
def logout_api():
    session.clear()
    return jsonify({"success": True})


# ---------- BUDGET ----------
@app.route("/api/budget", methods=["GET", "POST"])
def budget():
    conn = get_db()

    if request.method == "POST":
        amount = request.json["amount"]
        conn.execute("DELETE FROM budget")
        conn.execute("INSERT INTO budget (id, amount) VALUES (1, ?)", (amount,))
        conn.commit()

    row = conn.execute("SELECT amount FROM budget").fetchone()
    total = conn.execute("SELECT IFNULL(SUM(amount),0) FROM expenses").fetchone()[0]
    conn.close()

    budget_amount = row["amount"] if row else 0
    return jsonify({
        "budget": budget_amount,
        "total": total,
        "remaining": budget_amount - total
    })

# ---------- EXPENSES ----------
@app.route("/api/expenses", methods=["GET", "POST"])
def expenses():
    conn = get_db()

    if request.method == "POST":
        data = request.json
        conn.execute(
            "INSERT INTO expenses (date, category, note, amount) VALUES (?,?,?,?)",
            (data["date"], data["category"], data["note"], data["amount"])
        )
        conn.commit()

    rows = conn.execute("SELECT * FROM expenses ORDER BY date DESC").fetchall()
    conn.close()
    return jsonify([dict(r) for r in rows])

@app.route("/api/expenses/<int:id>", methods=["DELETE"])
def delete_expense(id):
    conn = get_db()
    conn.execute("DELETE FROM expenses WHERE id = ?", (id,))
    conn.commit()
    conn.close()
    return jsonify({"message": "deleted"})

@app.route("/api/delete-month/<month>", methods=["DELETE"])
def delete_month(month):
    conn = get_db()
    conn.execute(
        "DELETE FROM expenses WHERE substr(date,1,7) = ?",
        (month,)
    )
    conn.commit()
    conn.close()
    return jsonify({"message": "Month deleted"})


if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)

