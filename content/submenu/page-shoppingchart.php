
<style type="text/css">
/*------------------------------------------------------------------
Table Style
------------------------------------------------------------------ */
table a:link {
    color: #666;
    font-weight: bold;
    text-decoration:none;
}
table a:visited {
    color: #999999;
    font-weight:bold;
    text-decoration:none;
}
table a:active,
table a:hover {
    color: #bd5a35;
    text-decoration:underline;
}
table {
    font-family:Arial, Helvetica, sans-serif;
    color:#666;
    font-size:12px;
    background:#eaebec;
    border:#ccc 1px solid;

    border-radius:3px;
    border-collapse:collapse; border-spacing: 0; 

    box-shadow: 0 1px 2px #d1d1d1;
}
table th {
    padding:10px 10px 10px 10px;
    border-top:0;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;

    background: #ededed;
}
table th:first-child {
    text-align: left;
}
table tr:first-child th:first-child {
    border-top-left-radius:3px;
    border-left: 0;
}
table tr:first-child th:last-child {
    border-top-right-radius:3px;
}
table tr {
    text-align: center;
}
table td:first-child {
    text-align: left;
    border-left: 0;
}
table td {
    padding:10px;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
}
table tr:last-child td {
    border-bottom:0;
}
table tr:last-child td:first-child {
    border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
    border-bottom-right-radius:3px;
}
table tr:hover td {
    background: #f2f2f2;

}
table th, table td {
    width: 160px;

}
#wrapper {
    width: 740px;
    height: 300px;
    overflow-x: scroll;
    overflow-y: scroll;
}
table thead
{
    position:fixed;
}
</style>

</head>

<body>

<div id="wrapper">
<table>

    <!-- Table Header -->
    <thead>
        <tr>
            <th>Task Details</th>
            <th>Firstname</th>
            <th>Progress</th>
            <th>Vital Task</th>
        </tr>
    </thead>
    <!-- Table Header -->
    <!-- Table Body -->
    <tbody>
        <tr>
            <td>Create pretty table design</td>
            <td>&nbsp;</td>
            <td>100%</td>
            <td>Yes</td>
        </tr><!-- Table Row -->
        <tr>
            <td>Take the dog for a walk</td>
            <td>&nbsp;</td>
            <td>100%</td>
            <td>Yes</td>
        </tr><!-- Darker Table Row -->
        <tr>
            <td>Waste half the day on Twitter</td>
            <td>&nbsp;</td>
            <td>20%</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Feel inferior after viewing Dribble</td>
            <td>&nbsp;</td>
            <td>80%</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Wince at &quot;to do&quot; list</td>
            <td>&nbsp;</td>
            <td>100%</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Vow to complete personal project</td>
            <td>&nbsp;</td>
            <td>23%</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>Procrastinate</td>
            <td>&nbsp;</td>
            <td>80%</td>
            <td>No</td>
        </tr>
        <tr>
            <td><a href="#yep-iit-doesnt-exist">Hyperlink Example</a></td>
            <td>&nbsp;</td>
            <td>80%</td>
            <td><a href="#inexistent-id">Another</a></td>
        </tr>
    </tbody>
    <!-- Table Body -->
</table>
</div>
