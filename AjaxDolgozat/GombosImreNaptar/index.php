<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Naptár</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
        <script src="feldolgoz.js" type="text/javascript"></script>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <main>
            <header><h1>Határidő naptár</h1></header>
            <section id="honaplepteto">
                <button id="bal"><<</button>
                <h3 id="honap">hónap neve</h3>
                <button id="jobb">>></button>
            </section>
            <div id="fejlec">
                <div>H</div>
                <div>K</div>
                <div>Sze</div>
                <div>CS</div>
                <div>P</div>
                <div>SZo</div>
                <div>Va</div>
            </div>
		<h2>Tartalom</h2>
		
            <article id="tartalom">

                
                

            </article>
            <hr>
            <header><h2>Új időpont felvitele</h2></header>
            <section>
                <form class="urlap">

                    <label for="tevekenyseg">Tevékenység</label>
                    <input type="text" id="tevekenyseg" name="tevekenyseg" value="Tevékenység">
                    <label for="datum">Dátum:</label>
                    <input type="date" id="datum" name="datum" > 
<!--                    <label for="ido">Időpont:</label>
                    <input type="time" id="ido" name="ido" > -->
                    <br>
                    <input type="button" id="kuld" value="Ment" >
                </form>
            </section>
            <section id="idopontadatok">

            </section>

            <footer>Saját név</footer>
        </main>
    </body>
</html>
