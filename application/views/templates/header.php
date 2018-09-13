<html>
    <head>
        <title>ciBlog</title>
        <link rel="stylesheet" href="<?php echo base_url()?>asset/style.css">
        <link rel="stylesheet" href="https://bootswatch.com/3/darkly/bootstrap.min.css">
        
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
                        <li><a href="<?php echo base_url(); ?>/">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>/about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>/posts">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>/categories">Categories</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!$this->session->userdata('logged_in')) : ?>                       
                            <li><a href="<?php echo base_url(); ?>/users/register">Register</a></li>
                            <li><a href="<?php echo base_url(); ?>/users/login">Login</a></li>
                        <?php endif; ?>

                        <?php if($this->session->userdata('logged_in')) : ?>  
                            <li><a href="<?php echo base_url(); ?>/posts/create">Create</a></li>
                            <li><a href="<?php echo base_url(); ?>/categories/create">Create categories</a></li> 
                            
                            <li><a href="<?php echo base_url(); ?>/users/logout">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                
            </div>
        </nav>


        <div class="container">
        <!--- flash message -->
        <?php if($this->session->flashdata('user_registered')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>


        <?php if($this->session->flashdata('post_created')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?> 


        <?php if($this->session->flashdata('post_updated')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?> 


        <?php if($this->session->flashdata('category_created')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
        <?php endif; ?>


        <?php if($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>


        <?php if($this->session->flashdata('user_loggedin')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
        <?php endif; ?>


        <?php if($this->session->flashdata('category_deleted')) : ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
        <?php endif; ?>
        