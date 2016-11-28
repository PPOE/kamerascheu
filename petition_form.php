<?php
require_once("mysqlconn.php");

$sql = 'SELECT * FROM unterzeichner';
$result = $mysqli->query($sql);
$anzahl_unterzeichner = $result->num_rows + 289;

/*
while ($row = $result->fetch_assoc()) {  // NULL ist äquivalent zu false
  echo 'Die News "'.$row['Titel'].'" wurde am "'.$row['Datum']."\" geschrieben<br />\n";
}
*/

?>

<div class="container">

    <form class="form-horizontal" action="?t=sign" method='post'>
        <h2 class="form-signin-heading">Petition unterzeichnen</h2>

        <p>Es haben bereits <strong><?php echo $anzahl_unterzeichner; ?></strong> Personen für den Live-Stream aus dem
            Grazer Gemeinderat unterzeichnet.</p>

        <div class="control-group">
            <label class="control-label" for="inputName">Name</label>

            <div class="controls">
                <input type="text" id="inputName" name="inputName" placeholder="Name" required>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputEmail">E-Mail</label>

            <div class="controls">
                <input type="text" id="email" name="email" style="display: none;">
                <input type="email" id="inputEmail" name="inputEmail" placeholder="E-Mail"
                       data-validation-required-message="Geben Sie hier eine gültige E-Mail-Adresse an wenn Sie Informationen zur Petition erhalten wollen. Ansonsten lassen Sie dieses Feld frei.">
                <span class="help-inline">Tragen Sie hier Ihre E-Mail Adresse ein wenn Sie über die Petition weiterhin informiert werden wollen. Ansonsten lassen Sie diese Feld bitte frei.</span>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputOrt">PLZ Ort</label>

            <div class="controls">
                <input type="text" id="inputOrt" name="inputOrt" placeholder="PLZ Ort">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputAdresse">Straße und Hausnummer</label>

            <div class="controls">
                <input type="text" id="inputAdresse" name="inputAdresse" placeholder="Straße und Hausnummer">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputLand">Land</label>

            <div class="controls">
                <input type="text" id="inputLand" name="inputLand" placeholder="Land" value="Österreich">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="inputLand">Mein Name soll nicht veröffentlich werden.</label>

            <div class="controls">
                <input type="checkbox" value="1" name="inputAnonym">
            </div>
        </div>

        <div class="span3 offset2">
            <button class="btn btn-large btn-primary" type="submit">Petition unterzeichnen</button>
        </div>

    </form>
</div> <!-- /container -->

<div class="container">

    <h3>Nutzungsbedingungen:</h3>

    <ol>
        <li>Die von ihnen angegebenen Unterschriftendaten (Name, E-Mailadresse, Adresse, Datum der Unterschrift) werden
            von uns nur im Rahmen dieser Petition verwendet und werden nach Abschluss der Petition gelöscht.
        </li>
        <li>E-Mail-Adressen werden durch uns geschützt. Sie werden nicht veröffentlicht und nicht weitergegeben. Sie
            dienen ausschließlich der Möglichkeit Unterstützern der Petition Informationen zu dieser Petition zukommen
            zu lassen.
        </li>
    </ol>

    <h3>Datenschutzerklärung:</h3>

    <p>Wir erheben nur jene Daten die für die Durchführung der Petition erforderlich sind. Daten die nicht mehr
        bentötigt werden, löschen wir sofort. Ihre Daten werden nur im Rahmen der Nutzungsbedingungen zur Durchführung
        der Petition an Dritte weitergeleitet, oder wenn wir gesetzlich dazu verpflichtet sind. Personenbezogene Daten
        werden ausdrücklich nicht für Zwecke der Werbung/Marktforschung genutzt.</p>

    <p>Ihr Einverständnis für den Versand von E-Mail Benachrichtigungen geben Sie mit der Angabe Ihrer E-Mail Adresse;
        sie kann jederzeit widerrufen werden. Ihre E-Mail-Adresse ist zu jedem Zeitpunkt nur uns bekannt. Sie wird nicht
        veröffentlicht und nicht weitergegeben.</p>

    <p>Informationen versenden wir nur an Personen, die diese selbst auf den bestellt haben. Nach Ihrer Zeichnung der
        Petition senden wir Ihnen eine Bestätigungsmail. Erst wenn sie den darin enthaltenen Bestätigungslink betätigt
        haben, wird ihre Mailadresse für die Zusendung von Informationen genutzt.</p>

    <p>Ihre Adresse wird nicht für Briefpost verwendet. Wir geben Adressen nicht an Dritte weiter und kaufen auch keine
        Adressen von Dritten ein.</p>

    <p>Bei Besuch unserer Website und beim Abruf von Dateien sammelt unser Webserver über diese Vorgänge anonymisierte
        Protokollinformationen (z.B. Datum und Uhrzeit des Abrufs). Diese Protokollinformationen enthalten weder ihre IP
        Adresse, noch personenbezogene Daten. Es ist uns nicht möglich, die erfassten Daten einer bestimmten natürlichen
        Person zuzuordnen. Sämtliche dieser Angaben werden von uns ausschließlich zu statistischen Zwecken ausgewertet.
        Eine Weitergabe an Dritte erfolgt nicht. Eine Verknüpfung dieser Daten mit anderen Daten erfolgt nicht. Die
        Daten werden zudem nach einer statistischen Auswertung regelmäßig gelöscht.</p>

    <p>Sie haben das Recht, jederzeit Auskunft über die zu Ihrer Person gespeicherten Daten zu erhalten. Dies beinhaltet
        auch die Herkunft und die Empfänger Ihrer Daten sowie den Zweck der Datenverarbeitung. Ihre Anfrage richten Sie
        bitte per E-Mail an die im Impressum genannte Adresse.</p>

</div> <!-- /container -->

<script>
    $(function () { $("input").not("[type=submit]").jqBootstrapValidation(); });
</script>

