<html>
<head>
<script>
function validate()
{
    var name = document.getElementById("name").value;

    if(name == "")
    {
        alert("Name cannot be empty");
        return false;
    }
}
</script>
</head>

<body>

<form onsubmit="return validate()">
    <input type="text" id="name">
    <input type="submit">
</form>

</body>
</html>