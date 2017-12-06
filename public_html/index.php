<!DOCTYPE html>
<html lang='cs'>                                
  <head>                                                      
    <title>Havel&amp;Vejvoda                                                  
    </title>                                                      
    <meta charset='utf-8'>                                                      
    <meta name='description' content='Havel&Vejvoda Journey Project'>                                                      
    <meta name='keywords' content='cestovani,journey,project,cesty,cestovatele'>                                                      
    <meta name='author' content='Jan Havel,Jan Vejvoda'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">                                                      
    <meta name='robots' content='all'>                                                      
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>                                                                
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>                                                                   
    <link type="text/css" rel="stylesheet" href="styl.css">                                 
  </head>                               
  
  <body>
    <!--Vykreslovací plocha-->   
    <div id="pplocha">                             
      <header>      <h1>
          <a href="index.php?stranka=domu" title="hlavni stranka">Havel&amp;Vejvoda Journey Project<br>(webdesign-studentský projekt 2017)</a></h1>                                                                            
        <nav>
        <div class="menu">
        <ul>
        <!--Položka Domů-->                              
          <li>                           
              <h2><a href="index.php?stranka=domu">Domů</a></h2>                              
          </li>
        <!--Položka Země s podpoložkami-->                                                
          <li class="dropdown"><h2><a href="javascript:void(0)" class="dropbtn">Země</a></h2>
           <div class="list">                                     
            <a href="index.php?stranka=dansko">Dánsko</a>                                      
            <a href="index.php?stranka=svedsko">Švédsko</a>                                      
            <a href="index.php?stranka=nemecko">Německo</a>
            </div>                   
          </li>
         <!--Položka Fotogalerie s podpoložkami-->                                                          
          <li class="dropdown"><h2><a href="javascript:void(0)" class="dropbtn">Fotogalerie</a></h2>
           <div class="list">                                             
            <a href="index.php?stranka=danskofoto">Dánsko</a>                                    
            <a href="index.php?stranka=svedskofoto">Švédsko</a>                                    
            <a href="index.php?stranka=nemeckofoto">Německo</a>
           </div>                 
          </li>
          <!--Položka O mně-->                     
          <li>                                        
            <h2><a href="index.php?stranka=omne">O mně</a></h2>                      
          </li>
          <!--Položka Reference-->                   
          <li>                                 
            <h2><a href="index.php?stranka=reference">Reference</a></h2>                   
          </li>
          <!--Položka Kontakt-->                            
          <li>                                       
            <h2><a href="index.php?stranka=kontakt">Kontakt</a></h2>                            
          </li>          
          </ul>
          </div>
          </nav>                              
      </header>
                                                           
      <!--Hlavní obsah stránky-->
      <main>                                                                       
            <div id="centrovac">                                                
              <!--Měnící se obsah stránky s PHP kodem-->                                                                                                   
<?php
						if (isset($_GET['stranka']))
        $stranka = $_GET['stranka'];
else
        $stranka = 'domu';
if (preg_match('/^[a-z0-9]+$/', $stranka))
{
        $vlozeno = include('podstranky/' . $stranka . '.php');
        if (!$vlozeno)
                echo('Podstránka nenalezena');
}
else
        echo('Neplatný parametr.');
                                                                          ?>                                                                                                                                
            </div>                                                   
      </main>
      
      <!--Zápatí s Copyrightem-->                                   
      <footer>            
        <p id="foot"><strong>Copyright &copy; 2017 Havel&amp;Vejvoda Journey Project</strong>       
        </p>                             
      </footer>    
    </div>                                
  </body>                  
</html>