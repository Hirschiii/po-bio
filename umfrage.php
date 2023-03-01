<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Biodiversität</title>
    <meta name="description" content="Selbsteinschätzung Biodiversität">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style_umfrage.css">
    <script src="app.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <p id="log">Frage 1 von 13.</p>
        <form method="post" action="vote.php" id="myForm">
            <div class="question_grid">
                <div class="question active" id="q1">
                    <h3>1. Ist Ihnen bewusst, was "Biodiversität" ist?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question1" value="1" id="yes_q1">

                            <label for="yes_q1">Ja</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question1" value="2" id="einigermaßen_q1">

                            <label for="einigermaßen_q1">Einigermaßen</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question1" value="3" id="nein_q1">

                            <label for="nein_q1">Nein</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q2">
                    <h3>2. Fördern Sie bereits Biodiversität?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question2" value="1" id="yes_q2">

                            <label for="yes_q2">Ja</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question2" value="2" id="einigermaßen_q2">

                            <label for="einigermaßen_q2">Einigermaßen</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question2" value="3" id="nein_q2">

                            <label for="nein_q2">Nein</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q3">
                    <h3>3. Wie wird Biodiversität gemessen?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question3" value="1" id="q3_1">

                            <label for="q3_1">Anhand der vorkommenden Artenvielfalt auf einer Flächeneinheit gemessen.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question3" value="2" id="q3_2">

                            <label for="q3_2">Anhand der Vorkommenden Arten in einem Land gemessen.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question3" value="3" id="q3_3">

                            <label for="q3_3">Anhand der verschiedenen Arten einer Spezies gemessen</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q4">
                    <h3>4. Kennen Sie die drei Ebenen der Biodiversität?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question4" value="1" id="yes_q4">

                            <label for="yes_q4">Nein</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question4" value="2" id="einigermaßen_q4">

                            <label for="einigermaßen_q4">Vielfalt der Gene, die Vielfalt der Arten und die Vielfalt der Lebensräume.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question4" value="3" id="nein_q4">

                            <label for="nein_q4">Vielfalt der Arten einer Spezies, Vielfalt an Tieren in einem Land und die Vielfalt der Lebensräume</label>

                        </div>
                        <div class="answer">
                            <input type="radio" name="question4" value="4" id="4_q4">

                            <label for="4_q4">Die Vielfalt der Meereslebewesen, Vielfalt der Reptilien und die Vielfalt der Vögel </label>

                        </div>
                    </div>
                </div>
                <div class="question" id="q5">
                    <h3>5. Wo findet man die so genannten Biodiversität-Hotspots?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question5" value="1" id="yes_q5">

                            <label for="yes_q5">Im Südosten Australiens </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question5" value="2" id="einigermaßen_q5">

                            <label for="einigermaßen_q5">Im Westen Russlands </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question5" value="3" id="nein_q5">

                            <label for="nein_q5">In den Bergen Südwesten Asiens</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q6">
                    <h3>6. Wie viele Tierarten git es ungefähr?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question6" value="1" id="yes_q6">

                            <label for="yes_q6">Etwa 50 Millionen </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question6" value="2" id="einigermaßen_q6">

                            <label for="einigermaßen_q6">Etwa 100 Millionen </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question6" value="3" id="nein_q6">

                            <label for="nein_q6">Etwa 145 Millionen </label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q7">
                    <h3>7. Was schadet der Biodiversität des Meeres am meisten?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question7" value="1" id="yes_q7">

                            <label for="yes_q7">Die Düngung und die Abholzung der Regenwälder durch Landwirtschaft. </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question7" value="2" id="einigermaßen_q7">

                            <label for="einigermaßen_q7">Die Überfischung der Meere durch die Industrie.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question7" value="3" id="nein_q7">

                            <label for="nein_q7">Das Ignorieren von Mülltrennung.</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q8">
                    <h3>8. Warum ist Biodiversität des Meeres so wichtig?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question8" value="1" id="yes_q8">

                            <label for="yes_q8">Das Meer ist eine wichtige Quelle für Nahrung und Einkommen.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question8" value="2" id="einigermaßen_q8">

                            <label for="einigermaßen_q8">Das Meer spielt eine wichtige Rolle bei der Regulierung des Klimas.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question8" value="3" id="nein_q8">

                            <label for="nein_q8">Das Meer spielt eine wichtige Rolle bei der Eindämmung von Vulkanausbrüchen.</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q9">
                    <h3>9. Wie kann man den Fortbestand der Biodiversität sichern?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question9" value="1" id="yes_q9">

                            <label for="yes_q9">Durch das Jagen von Raubtieren, die viele kleine Arten fressen.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question9" value="2" id="einigermaßen_q9">

                            <label for="einigermaßen_q9">Durch den Schutz von Lebensräumen und der Eindämmung von Umweltverschmutzung. </label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question9" value="3" id="nein_q9">

                            <label for="nein_q9">Durch die Trennung von Müll.</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q10">
                    <h3>10. Welche Veränderungen würden durch das Fehlen der Biodiversität entstehen?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question10" value="1" id="yes_q10">

                            <label for="yes_q10">Die Luft wird dünner und ihre Qualität verbessert sich dadurch.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question10" value="2" id="einigermaßen_q10">

                            <label for="einigermaßen_q10">Der Meeresspiegel sinkt, da die Fische nicht mehr Platz für das Wasser wegnehmen.</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question10" value="3" id="nein_q10">

                            <label for="nein_q10">Es würde zu einem Rückgang der Landwirtschaft, der Fischerzeugung und der Forstwirtschaft führen.</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q11">
                    <h3>11. Was ist Biodiversität?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question11" value="1" id="yes_q11">

                            <label for="yes_q11">Die Vielfalt der Lebewesen und ihrer Ökosysteme auf der Erde</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question11" value="2" id="einigermaßen_q11">

                            <label for="einigermaßen_q11">Der Prozess der natürlichen Selektion in der Evolution</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question11" value="3" id="nein_q11">

                            <label for="nein_q11">Der Klimawandel und seine Auswirkungen auf die Tier- und Pflanszenwelt</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q12">
                    <h3>12. Was ist ein Ökosystem?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question12" value="1" id="yes_q12">

                            <label for="yes_q12">Eine Gruppe von Arten, die miteinander in Wechselbeziehung stehen</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question12" value="2" id="einigermaßen_q12">

                            <label for="einigermaßen_q12">Der Lebensraum einer Art</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question12" value="3" id="nein_q12">

                            <label for="nein_q12">Eine Region mit besonders hoher Biodiversität</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q13">
                    <h3>13. Was ist die Roten Liste?</h3>
                    <div class="container_answer">
                        <div class="answer">
                            <input type="radio" name="question13" value="1" id="yes_q13">

                            <label for="yes_q13">Eine Liste der bedrohten Arten, die vom Aussterben bedroht sind</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question13" value="2" id="einigermaßen_q13">

                            <label for="einigermaßen_q13">Eine Liste von Arten, die geschützt werden sollten</label>
                        </div>
                        <div class="answer">
                            <input type="radio" name="question13" value="3" id="nein_q13">

                            <label for="nein_q13">Eine Liste von Arten, die für den menschlichen Lebensraum von großer Bedeutung sind</label>
                        </div>
                    </div>
                </div>
                <div class="question" id="q14">
                    <h3>Dein Email (freiwillig)</h3>
                    <p>Wenn du dein Email angibts, bekommst du, neben einem allgemeinen Vergleich, eine detallierte Auswertung, wenn die Umfrage abgeschlossen ist.</p>
                    <input type="email" id="email" name="email" placeholder="Dein Email">
                    <p class="disclaimer">
                        Wenn sie ihr Email angeben, stimmen sie Automatisch zu, dass wir ihre Antworten verknüpft mir der Email abspeichern.
                    </p>
                </div>
                <!-- <input id="final_sub" style="display:none" type='submit' id="sub" name='btnsubmit' value='Submit'> -->
                <div id="form-btn"></div>
        </form>
        <div class="btn_wrapper" id="allbtn">
            <button class="button_umfrage" type="button" onclick="window.location.href='/po-bio';">Home</button>
            <button class="umfrage-sub" type="button" onclick="question(-1)">Zurück</button>
            <button class="umfrage-sub" type="button" id="weiter" onclick="question(1)">Weiter</button>
        </div>
    </div>
</body>

</html>
