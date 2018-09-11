<html>
    <head>
        <title>ciBlog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>asset/style.css">
        <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">ciBlog</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>/">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>/about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>/posts">Blog</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo base_url(); ?>/posts/create">Create</a></li>                        
                    </ul>
                </div>
                
            </div>
        </nav>


        <div class="container">
        