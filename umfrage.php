<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Page Title</title>
        <meta name="description" content="Selbsteinschätzung Biodiversität">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style_umfrage.css">
    </head>
    <body>
            <form  action="index.html">
                <button class="button_umfrage" type="submit">Zur Homepage</button>
            </form>
        <div class="container">
            <form method="post" action="vote.php">
                <div class="question_grid">
                    <div class="question">
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
                    <div class="question">
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
                    <div class="question">
                        <h3>3. Wie wird Biodiversität gemessen?</h3>
                        <div class="container_answer">
                            <div class="answer">
                                <input type="radio" name="question3" value="1" id="q3_1">
                                
                                <label for="q3_1">Die Biodiversität wird anhand der vorkommenden Artenvielfalt auf einer Flächeneinheit gemessen.</label>
                            </div>
                            <div class="answer">
                                <input type="radio" name="question3" value="2" id="q3_2">
                                
                                <label for="q3_2">Die Biodiversität wird anhand der Vorkommenden Arten in einem Land gemessen.</label>
                            </div>
                            <div class="answer">
                                <input type="radio" name="question3" value="3" id="q3_3">
                                
                                <label for="q3_3">Die Biodiversität wird anhand der verschiedenen Arten einer Spezies gemessen</label>
                            </div>
                        </div>
                    </div>
                    <div class="question">
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
                                <input type="radio" name="question4" value="3" id="nein_q5">
                                
                                <label for="nein_q5">Die Vielfalt der Meereslebewesen, Vielfalt der Reptilien und die Vielfalt der Vögel </label>

                            </div>
                        </div>
                    </div>
                    <div class="question">
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
                    <div class="question">
                        <h3>6. Wissen Sie, wie viele Tierarten es insgesamt gibt?</h3>
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
                    <div class="question">
                        <h3>7. Wie schadet man der Biodiversität des Meeres?</h3>
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
                    <div class="question">
                        <h3>8. Warum ist Biodiversität des Meeres so wichtig?</h3>
                        <div class="container_answer">
                            <div class="answer">
                                <input type="radio" name="question8" value="1" id="yes_q8">
                                
                                <label for="yes_q8">Weil das Meer eine wichtige Quelle für Nahrung und Einkommen darstellt.</label>
                            </div>
                            <div class="answer">
                                <input type="radio" name="question8" value="2" id="einigermaßen_q8">
                                
                                <label for="einigermaßen_q8">Weil das Meer eine wichtige Rolle bei der Regulierung des Klimas spielt.</label>
                            </div>
                            <div class="answer">
                                <input type="radio" name="question8" value="3" id="nein_q8">
                                
                                <label for="nein_q8">Weil das Meer eine wichtige Rolle bei der Eindämmung von Vulkanausbrüchen spielt.</label>
                            </div>
                        </div>
                    </div>
                    <div class="question">
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
                    <div class="question">
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
                    <div class="question">
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
                    <div class="question">
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
                    <div class="question">
                        <h3>13. Was ist der Roten List?</h3>
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
                <div class="question">
                    <h3>Dein Email (freiwillig)</h3>
                    <p>Wenn du dein Email angibts, bekommst du, neben einem allgemeinen Vergleich, eine detallierte Auswertung, wenn die Umfrage abgeschlossen ist.</p>
                    <input type="email" id="email" name="email" placeholder="Dein Email">    
                    <p class="disclaimer">
                        Wenn sie ihr Email angeben, stimmen sie Automatisch zu, das wir ihre Antworten verknüpft mir der Email abspeichern.
                    </p>
                </div>
                <input id="umfrage-sub" type='submit' name='submit' value='Submit'>
            </form>
        </div>
    </body>
</html>
