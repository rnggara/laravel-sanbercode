<!DOCTYPE html>
<html>
<head>
    <title>Laravel Sanbercode</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="welcome" method="post">
    @csrf
    <table>
        <tr>
            <td>First Name</td>
            <td>:</td>
            <td><input type="text" name="frst"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><input type="text" name="last"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <input type="radio" name="gender" value="male"> <label>Male</label> <br>
                <input type="radio" name="gender" value="female"> <label>Female</label> <br>
                <input type="radio" name="gender" value="other"> <label>Other</label>
            </td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td>:</td>
            <td>
                <select name="nationality">
                    <option value="">Choose Nationality</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Philiphines">Philiphines</option>
                    <option value="Laos">Laos</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Language Spoken</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="language" value="bahasa"> <label>Bahasa Indonesia</label> <br>
                <input type="checkbox" name="language" value="english"> <label>English</label> <br>
                <input type="checkbox" name="language" value="other"> <label>Other</label>
            </td>
        </tr>
        <tr>
            <td>Bio</td>
            <td>:</td>
            <td>
                <textarea name="bio"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="signup"> Sign Up</button></td>
        </tr>
    </table>
</form>
</body>
</html>
