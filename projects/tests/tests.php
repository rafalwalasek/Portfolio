<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testy</title>
    <link rel="icon" href="images/w.ico" type="image/x-icon">

    <link rel="stylesheet" href="tests.css">
    <link rel="stylesheet" href="time/time.css">
    <link rel="stylesheet" href="css/cover.css">

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- lato font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- header -->
    <header>
        <div class="logo">
            <img src="images/w.ico" alt="Logo W"><span>R</span>afał.
        </div>
        <div class="hamburger-menu" id="hamburger">
            &#9776;
        </div>
        <nav class="nav-bar" id="nav-bar" role="navigation">
            <ul>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="../../pages/about-me.html">About Me</a></li>
                <li><a href="../../pages/services.html">Services</a></li>
                <li><a href="../projects.html">Projects</a></li>
                <li><a href="#" class="active">Tests</a></li>
                <li><a href="../../pages/contact.html">Contact</a></li>
            </ul>
        </nav>
    </header> <!-- end header -->

    <!-- main -->
    <main>

        <!-- boxes section -->
        <div class="boxes-section">

            <p id="p_main">Egzamin rozpocznie się po naciśnięciu przycisku: START. Każdy test składa się z 40 pytań. Aby zdać trzeba uzyskać 50% poprawnych odpowiedzi. Czas na wykonanie testu to 60 min.</p>

            <!-- box section top -->
            <section class="box-section">
                
                <div class="box-quiz">
                    <h2>Sieci</h2>
                    <i class='bx bx-wifi'></i>
                    <button class="btn-start" data-category="sieci">Start</button>
                </div>
                <!--<div class="box-quiz">
                    <h2>Systemy</h2>
                    <i class='bx bx-devices'></i>
                    <button class="btn-start" data-category="systemy">Start</button>
                </div>
                <!--<div class="box-quiz">
                    <h2>Bazy</h2>
                    <i class='bx bx-line-chart'></i>
                    <button class="btn-start">Start</button>
                </div>-->
            </section> <!-- end box section top -->
            <!-- box section bottom 
            <section class="box-section">
                <div class="box-quiz">
                    <h2>Sprzęt</h2>
                    <i class='bx bx-microchip'></i>
                    <button class="btn-start">Start</button>
                </div>
                <div class="box-quiz">
                    <h2>Angielski</h2>
                    <i class='bx bx-user-pin' ></i>
                    <button class="btn-start">Start</button>
                </div>
                <div class="box-quiz">
                    <h2>Programowanie</h2>
                    <i class='bx bx-user-pin' ></i>
                    <button class="btn-start">Start</button>
                </div>-->
            </section> <!-- end box section bottom -->

            <!-- data-base-container -->
            <div class="data-base-container">

                <!-- all questions -->
                <div class="all-questions">

                    <p>Wszystkie pytania z bazy</p>

                    <?php
                        include('php/all_questions.php');
                    ?>

                </div> <!-- end all questions -->

                <!-- add and update -->
                <div class="add-and-update">

                    <!-- add questions -->
                    <div class="add-question">

                        <p>Dodaj pytanie do testu</p>

                        <form action="php/add_question.php" class="add-question-form" method="POST">

                            <label>Treść pytania:</label>
                            <textarea name="question" rows="5" required></textarea>
                            
                            <label>Odpowiedź A:</label>
                            <input type="text" name="answerA" required>
                            
                            <label>Odpowiedź B:</label>
                            <input type="text" name="answerB" required>
                            
                            <label>Odpowiedź C:</label>
                            <input type="text" name="answerC" required>
                            
                            <label>Odpowiedź D:</label>
                            <input type="text" name="answerD" required>
                            
                            <label>Odpowiedź poprawna:</label>
                            <input type="text" name="correctAnswer" required>
                            
                            <label>Kategoria:</label>
                            <select name="category" required>
                                <option value="">-- Wybierz kategorię --</option>
                                <option value="Sieci komputerowe">Sieci komputerowe</option>
                                <option value="Systemy operacyjne">Systemy operacyjne</option>
                                <option value="Sprzęt komputerowy">Sprzęt komputerowy</option>
                                <option value="Programowanie">Programowanie</option>
                            </select>

                            <button type="submit">Dodaj pytanie</button>
                            <button type="reset">Wyczyść formularz</button>

                        </form>

                    </div> <!-- end add questions -->
                    <!-- update questions -->
                    <div class="update-question">

                        <p>Uaktualnienie pytania w teście</p>

                        <form id="update-question-form" action="php/update_question.php" class="update-question-form" method="POST">

                            <label><input type="checkbox" class="update-checkbox" data-target="question">Treść pytania:</label>
                            <textarea name="question" rows="5" required disabled></textarea>

                            <label><input type="checkbox" class="update-checkbox" data-target="answerA">Odpowiedź A:</label>
                            <input type="text" name="answerA" required disabled>
                            
                            <label><input type="checkbox" class="update-checkbox" data-target="answerB">Odpowiedź B:</label>
                            <input type="text" name="answerB" required disabled>
                            
                            <label><input type="checkbox" class="update-checkbox" data-target="answerC">Odpowiedź C:</label>
                            <input type="text" name="answerC" required disabled>
                            
                            <label><input type="checkbox" class="update-checkbox" data-target="answerD">Odpowiedź D:</label>
                            <input type="text" name="answerD" required disabled>
                            
                            <label><input type="checkbox" class="update-checkbox" data-target="correctAnswer">Odpowiedź poprawna:</label>
                            <input type="text" name="correctAnswer" required disabled>
                            
                            <label><input type="checkbox" class="update-checkbox" data-target="category">Kategoria:</label>
                            <select name="category" required disabled>
                                <option value="">-- Wybierz kategorię --</option>
                                <option value="Sieci komputerowe">Sieci komputerowe</option>
                                <option value="Systemy operacyjne">Systemy operacyjne</option>
                                <option value="Sprzęt komputerowy">Sprzęt komputerowy</option>
                                <option value="Programowanie">Programowanie</option>
                            </select>

                            <button type="submit">Uaktualnij pytanie</button>
                            <button type="reset">Wyczyść formularz</button>

                        </form>

                    </div> <!-- end update questions -->

                </div> <!-- end add and update -->
                
                <!-- remove questions -->
                <div class="remove-question">

                    <p>Usuń pytanie z testu</p>

                    <form action="php/remove_question.php" class="remove-question-form" method="POST">

                        <label>Treść pytania:</label>
                        <textarea name="question" rows="5" required></textarea>

                        <button type="submit">Usuń pytanie</button>
                        <button type="reset">Wyczyść formularz</button>

                    </form>

                </div> <!-- end remove questions -->

            </div> <!-- end data-base-container -->

        </div> <!-- end boxes section -->

        <!-- appearance section -->
        <div class="appearance-section">

            <!-- category -->
            <p class="category_name">Sieci komputerowe</p> <!-- end category --> 

            <!-- time section -->
            <section class="time">
                <time class="countdown">60:00</time>
                <button class="btn-exit">Zakończ</button>
            </section> <!-- time section -->

            <!-- end test section -->
            <section class="test">
                <div class="box-question">
                    <?php
                        include('php/display_questions.php');
                    ?>
                </div>
            </section> <!-- end test section -->

            <!-- time section 
            <section class="time">
                <time class="countdown">60:00</time>
                <button class="btn-exit">Zakończ</button>
            </section> <!-- time section -->

        </div> <!-- end appearance section -->
        
    </main> <!-- end main -->

    <script src="scripts/tests.js"></script>
    <!--<script src="time/time.js"></script>-->
    <script src="scripts/endTest.js"></script>
    <script src="scripts/checkbox.js"></script>

</body>
</html>