<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 300px;
    width: 90px;
    position: fixed;
    z-index: 1;
    top: 150px;
    left: 0px;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}


.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 15px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="create">Create</a>
  <a href="studentlist">Student List</a>
  <a href="edit">Edit/Delete Student</a>
  <a href="create_faculty">Create Faculty</a>
  <a href="facultylist">Faculty List</a>
  <a href="edit_faculty">Edit/Delete Faculty</a>
</div>
