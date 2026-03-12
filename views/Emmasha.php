<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Personal page</title>
        <style> 
        

    header{
        background:#2c4da7;
display:flex;
justify-content:flex-start;
align-items:center;

}


    header span{
        color: white;
margin-left:20px;
cursor:pointer;
}

.Name{     
color: white;
    background:linear-gradient(120deg,#2c4da7,#6b8cff);
     display:flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    
}

.Name img{
    
width:180px;
height:180px;
border-radius:50%;
border:6px solid white;

}
 .Name h1{
color: white;
}
div button {
    color:blue;
    background-color: white;
    border: none;
    border-radius: 5px;
    padding: 10px;
    
    padding-left:15px;
      padding-right: 15px;
      
}
.About {
    
background:white;
padding:25px;
border-radius:10px;

margin-bottom:20px;
margin-top: 20px;

}
.merge {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 20px;
}
.About button {
     background-color: green;
    border: none;
    border-radius: 5px;
    padding: 10px;
    color: white;
    padding-left:15px;
      padding-right: 15px;
}


            </style>
            </head>
            <body>
             
                <header>

                <h2 style="color: white;"> KETUANZE EMMASHA NEMBUANYI </h2>
                    <div>
                       <span>Home</span>
                       <span>About</span>
                       <span>Projects</span>
</div>
</header>

<div class="Name">
<div>
<h1 > Hi, i'm Emmasha </h1>
<p>Aspiring Software Engineer</p>
<p>
I'm a passionate software engineering student at the University of Buea
focusing on web development and plugin creation.
</p>
<a href="tel:+237673698317">
  <button>Contact Me</button>
</a>
</div>
<img src="<?php echo plugin_dir_url(__FILE__); ?>images/jeff.png" alt="Kent Image" >
</div>
<div class="merge">
    <div>
<h2>About me</h2><hr>
<p> I am an HND student at the University of Buea, reading Software Engineering.</p>
<p>I have a strong passion for coding and web development, where I enjoy turning 
ideas into functional and creative projects.</p>
 <p>I am also interested in plugin
 development, as it allows me to extend platforms and build tools that improve
  user experiences.</p>
  <div class="About">
  <h2> What I'm Currently Working On</h2>
  <ul style="list-style-type: disc; margin-left: 20px;">
    <li>Strengthening my programming skills</li>
   <li>Becoming better at web development</li>
<li>Building projects that actually solve problems</li>
</ul>

</div>
</div>

<div class="About">
    <h2> Experience</h2>
   <p> <strong> Software Engineering Student </strong> <br>
    2025 — present <br>
    College Of Technology </p>
    <strong> Web developement (learning)</strong><br>
    Building projects in HTML, CSS and Wordpress

    <h2> Contact </h2>
   <strong> Email</strong>: Ketuanzee@gmail.com <br>
   <p><strong> Location </strong>: Buea, Cameroon </p>
   <a href="mailto:Ketuanzee@gmail.com"><button>Email</button></a>
<a href="https://wa.me/237673698317"><button>Whatsapp</button></a>
   
</div>
</div>

    
</body>
</html>