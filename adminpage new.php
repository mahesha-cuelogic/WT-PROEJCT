<PHP>
<head> 
</head>
<style>
#menu, #menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
#menu {
    width: 960px;
    margin: 60px auto;
    border: 1px solid #222;
    background-color: #111;
    background-image: linear-gradient(#444, #111);
    border-radius: 6px;
    box-shadow: 0 1px 1px #777;
}
#menu:before,
#menu:after {
    content: "";
    display: table;
}

#menu:after {#menu li {
    float: left;
    border-right: 1px solid #222;
    box-shadow: 1px 0 0 #444;
    position: relative;
}

#menu a {
    float: left;
    padding: 12px 30px;
    color: #999;
    text-transform: uppercase;
    font: bold 12px Arial, Helvetica;
    text-decoration: none;
    text-shadow: 0 1px 0 #000;
}

#menu li:hover > a {
    color: #fafafa;
}

*html #menu li a:hover { /* IE6 only */
    color: #fafafa;
}
    clear: both;
}

#menu {
    zoom:1;
}

  
</style>
<body >
<img src="Capture.JPG">
<ul id="unorderlist1">
    <li><a href="#">Home</a></li>
    <li>
        <a href="#">Categories</a>
        <ul>
            <li><a href="#">CSS</a></li>
            <li><a href="#">Graphic design</a></li>
            <li><a href="#">Development tools</a></li>
            <li><a href="#">Web design</a></li>
        </ul>
    </li>
    <li><a href="#">Work</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
</ul>

</body>
</PHP>