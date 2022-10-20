<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>  
           

        <section id="apropos_section">
            <div id="apropos_div1">
                <h2>DayBreaks</h2>
                <div class="project-header">
                    <p>
                        Le projet est commencé en octobre 2020 à Cergy-Pontoise. Ce site est développé par 4 étudiants passionés par le web. 
                    </p>
                    <p>
                    Nous sommes neutre et indépendants, et chaque jour/semaine, nous vous donnons des contenus divers à l’échelle nationale et/ou mondiale qui informent, divertissent et éduquent nos visiteurs.
                    Chaque information donné par Universal Times sont fiable et sera à la hauteur des attentes des utilisateurs.
                    </p>
                </div>
                <article style="margin: 2rem 0; gap: 2rem;">
                    <h3>Qui sommes-nous ?</h3>
                    <div></div>
                    <p>Etudiants en dernière année de Licence Informatique à CY Cergy Paris Université. 
                       Passionnés par le développement web et de logiciels. Intéressés dans le domaine du journalisme.
                    </p>
                </article>
                <article style="margin: 1rem 0; width: 100%;">
                    <h3>Notre mission</h3>
                    <div></div>
                    <p>Notre objectif est d’informer nos lecteurs sur des sujets de fond ou de relayer des actualités généralistes ou thématiques. Quel que soit le sujet traité, que ça soit des sujets nationaux ou internationaux, nous ferons en sorte que chaque information transmise soit fiable et vérifiée, peu importe le support utilisé.</p>
                </article>
                <article style="margin: 2rem 0; gap: 2rem;">
                    <h3>Notre Histoire</h3>
                    <div></div>
                    <p>De nos jours, nous n’avons pas forcément le temps nécessaire pour regarder la télévision chaque jour et être bien informer de l’actualité du jour. De ce fait, les technologies ont très vite évolué surtout avec la digitalisation des médias. Pour accompagner cette expansion, nous avons décidé de mettre en place NEWSBREAK qui facilitera grandement la tâche. En effet, il suffira d’avoir une simple connexion internet pour accéder au contenu divers de NEWSBREAK. Et ainsi découvrir toutes les actualités du jour et de la semaine en détail. Le tout dans n’importe quel moment de la journée et n’importe où.</p>
                </article>
            </div>
        </section>
        <section id="apropos_contactbutton">
            <div>
                <h2>Avez-vous une autre question sur DayBreaks ?</h2>
                <!-- fORMULAIRE ENVOIE DE MAIL-->

        <form method="post" action="mail.php">
            <label>Tape ton message ici pour m'écrire</label>
                <textarea rows="10" cols="30" name="message"></textarea>
            <input type="submit">
        </form>
                 <a href="contact.php">Contacter</a>
            </div>
        </section>


        </main>

        <!-- lien du fichier js -->
        <script src="js/script.js">

        </script>


<?php
        require "./include/footer.inc.php";
?>
            