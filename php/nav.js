var navbar = '<nav><ul><li><img src="images/logo2.png" width="75" height="44" /></li><li><a href="index.php">Home</a></li><li><a href="request.php">Request a Game</a></li><li><a href="results.php">Browse</a></li><lir> <form action="results.php" method="POST"><input type="text" id="search" name="search" placeholder="Search" /><a href=""><button style="margin-right: 25px; margin-top: 13px" type="submit" name="submit-search"><img src="https://static.thenounproject.com/png/424965-200.png" width="10"height="10"/></button></a></form></lir><li><a href="login.php">Login</a></li></ul></nav>';
document.body.insertAdjacentHTML("afterbegin", navbar);

/* Generic User Navbar
  <nav>
        <ul>
            <li><img src="images/logo2.png" width="75" height="44"></li>
            <li><a href="homePage.html">Home</a></li>
            <li><a href="request.html">Request a Game</a></li>
            <li><a href="browse.html">Browse</a></li>
            <lir>
              <input type="text" id="search" placeholder="Search">
              <a href=""><button style="margin-right:25px; margin-top: 13px;" type="button">
                <img src="https://static.thenounproject.com/png/424965-200.png" width="10" height="10"></button>
              </a>
            </lir>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav> */