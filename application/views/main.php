<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Your Blogger</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#myModalpo" href="#">Add Post</a>&emsp;
            <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#myModal" href="#">Login</a>&emsp;
            <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#myModalSignup" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="<?php echo base_url('index.php/main/');?>">Home</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <?php foreach($post as $row){
          //var_dump($row);exit();
          ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $row->TITLE;?></a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><?php echo substr($row->TEXT,0,200)."..."; ?></p>
              <a href="<?php echo base_url('index.php/main/get_thread_by_id/'.$row->ID)?>">Continue reading</a>
            </div>
          </div>
        </div>
          <?php } ?>
      </div>
    </div>

    <footer class="blog-footer">
      <p>Copyright 2018 &copy; Delika Pratiwi. Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

<!-- The Modal -->
<div class="modal" id="myModalpo">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Posting Now!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('index.php/main/add_thread');?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" placeholder="Judul">
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
           <textarea type="text" class="form-control" id="exampleInputPassword1" name="desc" placeholder="Deskripsi"></textarea> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tandai seseorang dalam thread</label>
           <div class="form-control" id="autocomplete-textarea" contenteditable="true"></div>
          </div>



    <script src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <!-- Text Autcomplete plugin -->
    <script src="<?php echo base_url();?>index.php/assets/js/jquery.textcomplete.min.js"></script>
    <!-- Algolia Search API Client - latest version -->
    <script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

      // #1 - Search configuration - to replace with your own
      var ALGOLIA_APPID = 'latency';
      var ALGOLIA_SEARCH_APIKEY = '6be0576ff61c053d5f9a3225e2a90f76';
      var ALGOLIA_INDEX_NAME = 'actors';
      var NB_RESULTS_DISPLAYED = 5;

      // #2- Algolia Client Initialization
      var algoliaClient = new algoliasearch(ALGOLIA_APPID, ALGOLIA_SEARCH_APIKEY); 
      var index = algoliaClient.initIndex(ALGOLIA_INDEX_NAME);

      var lastQuery = '';
      $('#autocomplete-textarea').textcomplete([
        {
          // #3 - Regular experession used to trigger search
          match: /(^|\s)@(\w*(?:\s*\w*)*)$/,

          // #4 - Function called at every new keystroke
          search: function(query, callback) {
            lastQuery = query;

            index.search(lastQuery, { hitsPerPage: NB_RESULTS_DISPLAYED })
              .then(function searchSuccess(content) {
                if (content.query === lastQuery) {
                  callback(content.hits);
                }
              })
              .catch(function searchFailure(err) {
                console.error(err);
              });
          },

          // #5 - Template used to display each result obtained by the Algolia API
          template: function (hit) {
            // Returns the highlighted version of the name attribute
            return '<div class="picture"><img src="//image.tmdb.org/t/p/w45/'+ hit.image_path +'" /></div><span class="name">' + hit._highlightResult.name.value + '<span>';
          },

          // #6 - Template used to display the selected result in the textarea
          replace: function (hit) {
            var html = '<a class="tag-item" href="">';
            html += '<div class="picture-wrapper"><img src="//image.tmdb.org/t/p/w45/'+ hit.image_path +'" /></div>';
            html += '<span class="label">' + hit.name + '</span></a>';
            return html;
          }
        }
      ], {
          // #7 - Special adapter to handle HTMLContentEditable divs
          adapter: $.fn.textcomplete.HTMLContentEditable,
          footer: '<div style="text-align: center; display: block; font-size:12px; margin: 5px 0 0 0;">Powered by <a href="http://www.algolia.com"><img src="https://www.algolia.com/assets/algolia128x40.png" style="height: 14px;" /></a></div>'
      });
    
    });
    </script>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login Now!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModalSignup">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Daftar Sekarang!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('index.php/main/daftar');?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="xxx@gmail.com">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat"></textarea> 
          </div>
          <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
    </div>
  </div>
</div>

  </body>
</html>
