<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Yana</title>
    <link rel="stylesheet" href="../portfolio/css/style.css">
</head>
<body>
    <header>
        <div class="logo">        
            <img src="../portfolio/foto/logo.png" alt="logo">
        </div>
        <div class="logo">
            <h1>Yana Alaerts</h1>
        </div>
    </header>
    <main>
        <div class="foto">
            <img src="../portfolio/foto/ik.jpg" alt="placeholder">
        </div>
        <div class="text-main">
            <h2><p>Welkom op mijn portfolio!</p>
            <p>Ik ben Yana Alaerts.</p>
            <p> Ik ben 19 jaar.</p>
            <p> Ik kom uit België.</p>
            <p> Ik woon samen met mijn vriend Niels.</p>
            <p> Mijn hobbies zijn game, schaatsen en de beste tante ooit zijn!</p>
            <p> Hier op mijn porfolio ga je kunnen vinden wat ik allemaal tot nu toe heb geleerd in periode 1 en periode 2 van dit studiejaar.</p>
            <p> Ik hoop dat je een kijkje neemt naar mijn professionele vardigheden!</p>
            </h2>
        </div>
        <div class="button">
            <button onclick="showJaar1()">Jaar 1</button>
          <!--  <button onclick="showJaar2()">Jaar 2</button> -->
        </div>
        <div class="button">
            <button onclick="showAll()">All</button>
         <!--    <button onclick="showProjects()">Projects</button> -->
            <button onclick="showProfSkills()">ProfSkills</button>
        </div>

        <div class="flex" id="contentContainer">
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <h1>Mijn Sociale Media:</h1>
            <ul class="footer-list">
                <li><a href="https://www.linkedin.com/in/yana-alaerts-0969a62a6/" target="_blank"><h3>Linkedin</h3></a></li>
                <li><a href="https://www.youtube.com/channel/UC3fs3ZCu7fCTAmL2yeiVZBQ" target="_blank"><h3>Youtube</h3></a></li>
            </ul>
        </div>
    </footer>

    <script>
        // Arrays
       // const projects1 = ["project 1", "project 2", "project 3"];
       //const projectUrls1 = ["../portfolio/foto/OUI.png" , "../portfolio/foto/OUI.png" , "../portfolio/foto/OUI.png"];
       //const projectLinks1 = ["OUI.html" , "Data.html", "Battle.html"];

        const profSkills1 = ["Reflecteren", "Feedback/Communiceren" , "Plan van aanpak" , "Presenteren" , "Vergadertechnieken" , "Edumundo"];
        const profSkillUrls1 = ["../portfolio/foto/reflecteren.png" , "../portfolio/foto/feedback.png" , "../portfolio/foto/planvanaanpak.jpg" , "../portfolio/foto/presenteren.jpg" , "../portfolio/foto/vergadering.jpg" , "../portfolio/foto/edumundo.png"];
        const profSkillLinks1 = ["https://docs.google.com/document/d/11I89YjqfhI5sLrE9B27hiJ4PBoqKfBic/edit" , "https://docs.google.com/document/d/1VkgviWAxRCMRLvCx6gcndfOFaLthFo-UIxIznXsc-6g/edit" , "https://docs.google.com/document/d/1RvOos_hY8feKJE1gP6KiiW_Hr6_LA6Pb/edit"  , "https://docs.google.com/document/d/1ABHECWkUU7sm3IqQ3Lr-1fOYifVqx5wv/edit"  , "https://docs.google.com/document/d/1atvU8rB3JC_TpO-G9dXVCSoGv9DcfjBh/edit"  , "https://docs.google.com/document/d/1TFR1ht5kGcc4YSU0JLIzsgCHzi0LS5ei/edit"];

        // Function to display all content

        function showJaar1(){
            displayContent([ /*...projects1,*/ ...profSkills1], [/*...projectUrls1,*/ ...profSkillUrls1], [/*...projectLinks1,*/ ...profSkillLinks1]);
        }

        function showJaar2(){
            hideAll();
        }

        function hideAll() {
            const contentContainer = document.getElementById('contentContainer');
            contentContainer.innerHTML = '';
        }

        function showAll() {
            displayContent([/*...projects1,*/ ...profSkills1], [/*...projectUrls1,*/ ...profSkillUrls1], [/*...projectLinks1,*/ ...profSkillLinks1]);
        }

        // Function to display only projects
        function showProjects() {
            displayContent(projects1, projectUrls1, projectLinks1);
        }

        // Function to display only professional skills
        function showProfSkills() {
            displayContent(profSkills1, profSkillUrls1, profSkillLinks1);
        }

        // Function to dynamically display content based on arrays
        function displayContent(titles, urls, links) {
            const contentContainer = document.getElementById('contentContainer');
            contentContainer.innerHTML = '';

            for (let i = 0; i < titles.length; i++) {
                const content = `
                    <a href='${links[i]}' target='_blank'><img class='hover-img' src='${urls[i]}' alt='${titles[i]}'><p><h2 class='center'>${titles[i]}</h2></p></a>
                `;
                contentContainer.innerHTML += content;
            }
        }
        

        // Initial display when the page loads
        showAll();
    </script>
</body>
</html>