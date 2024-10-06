<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

header {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
}

main {
    display: flex;
    flex-direction: row;
}

.attendance-form {
    flex: 1;
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.attendance-list {
    flex: 2;
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f0f0f0;
}

footer {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
    clear: both;
}
</style>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Attendance System</h1>
    </header>
    <main>
        <section class="attendance-form">
            <h2>Mark Attendance</h2>
            <form>
                <label for="employee-id">Employee ID:</label>
                <input type="number" id="employee-id" name="employee-id"><br><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date"><br><br>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select><br><br>
                <input type="submit" value="Mark Attendance">
            </form>
        </section>
        <section class="attendance-list">
            <h2>Attendance List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- attendance list will be displayed here -->
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Attendance System</p>
    </footer>
</body>
</html>
