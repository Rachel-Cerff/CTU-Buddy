<!-- discussion code-->
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="discussion.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</head>
<html>
<body>

<header class="header">
        <a class="logo" href="Index.html">
            <img src="logo-02-2024.png" alt="CTU Logo">
        </a>
        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="Timetable.html">Timetable</a>
            <a href="index.php">Discussion</a>
            <a href="Share Resouces.html">Share Resources</a>
            <a href="About us.html">About us</a>
            <a href="Contact us.html">Contact us</a>
        </nav>
        </nav>
        <form action="" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="Submit"><i class='bx bx-search-alt-2'></i></button>
        </form>
    </header>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <div class="image-container">
        <h3>Welcome to the</h3>
        <h1>Discussion page</h1>
        <p>Feel free to ask any questions</p>
    </div>

<div class="container">
 
  <div class="panel panel-default" style="margin-top:50px">
    <div class="panel-body">
      <h3>Discussion forum</h3>
      <hr>
      <form name="frm" method="post">
          <input type="hidden" id="commentid" name="Pcommentid" value="0">
    <div class="form-group">
      <label for="usr">Enter your name:</label>
      <input type="text" class="form-control" name="name" required>
    </div>
      <div class="form-group">
        <label for="comment">What is your question?:</label>
        <textarea class="form-control" rows="5" name="msg" required></textarea>
      </div>
    <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
    </form>
    </div>
  </div>
  <div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>          
  <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
    <tbody id="record">

  </tbody>
  </table>
  </div>
</div>
</div>


<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply to Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
          <div class="form-group">
            <label for="usr">What's your name:</label>
            <input type="text" class="form-control" name="Rname" required>
          </div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
           <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>
 
  </div>
</div>

<footer class="footer">
        <nav class="nav-footer">
            <a href="index.html">Home</a>
            <a href="discussion.php">Discussion</a>
            <a href="Share Resouces.html">Share Resources</a>
            <a href="About us.html">About us</a>
            <a href="Contact us.html">Contact us</a>
        </nav>
        <span><p>Rachel Cerff - Code Gods - 20240037</p></span> 
        <div class="footer-text">
            <p>Copyright © 2024 Created by Rachel Cerff CTU Students| All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>