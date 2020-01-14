<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for mod_mumie
 *
 * @package mod_mumie
 * @copyright  2017-2020 integral-learning GmbH (https://www.integral-learning.de/)
 * @author Tobias Goltz (tobias.goltz@integral-learning.de)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'MUMIE Task';
$string['modulename'] = 'MUMIE Task';
$string['modulename_help'] = '<p>Dieses Aktivität-Modul ermöglicht die Nutzung von Inhalten der MUMIE-Plattform auf Moodle und eine automatische Synchronisierung der dort erzielten Noten.
Ein MUMIE Task steht hierbei für eine einzelne benote Aufgabe eines MUMIE-Kurses.</p>
<p><strong>Was ist MUMIE?</strong></p>
<p>

MUMIE ist eine E-Learning-Plattform zum Lernen und Lehren von Mathematik und Informatik.
Sie wurde ursprünglich entwickelt, um das praxisorientierte Unterrichten an der Schnittstelle zwischen Gymnasium und Universität zu verbessern.
Die MUMIE zeichnet sich durch ihr hohes Maß an Flexibilität aus und kann unkompliziert in andere Lern- und Content-Management-Systeme eingebunden werden.
MUMIE-Kurse und deren hochwertige Kursmaterialien können ganz nach Ihren Wünschen an Ihre pädagogischen Anforderungen angepasst werden.
Sie bietet Lern- und Trainingsumgebungen und Wiki-artige soziale Netzwerke für virtuelle Tutorien und selbstorganisiertes Lernen und zur Verbesserung von kognitiven und metakognitiven Fähigkeiten.
Leistungsstarke Autorenwerkzeuge ermöglichen die Erstellung von neuen Inhalten. Dies öffnet die Tür für neue, herausfordernde und effizientere pädagogische Szenarien.

<br /><br /> Besuchen Sie unsere <a href="https://www.mumie.net/platform/" target="_blank" rel="nofollow noreferrer noopener">Website</a> für weitere Informationen.</p>
<p><strong>Key-Features der MUMIE Task</strong></p>
<ul>
<li><strong>Benutzen Sie MUMIE Tasks in Moodle</strong><br /> Fügen Sie Ihrem Kurs beliebig viele MUMIE Taks mit einem leicht zu bedienenden Menü hinzu.</li>
<li><strong>Erhalten Sie immer die neusten Inhalte</strong><br /> Sobald auf einem MUMIE-Server neue Inhalte verfügar sind, stehen Ihnen diese sofort zur Verfügung. Dafür ist kein weiteres Update notwendig!</li>
<li><strong>Mehrsprachig</strong><br /> Die meisten Inhalte auf MUMIE-Servern sind in mehreren Sprachen verfügbar. Sie können die Anzeigesprache mit einem simplen Knopfdruck ändern.</li>
<li><strong>Automatische Synchronisierung von Noten</strong><br /> Alle MUMIE Tasks werden automatisch benotet und die so erziehlten Noten werden in das Moodle-Gradebook aufgenommen.</li>
<li><strong>Single-Sign-On und automatisches Sign-Out</strong><br /> Studierende müssen keinen neuen Account für die MUMIE-Plattform erstellen oder sich einloggen. Dies geschieht automatisch, sobald sie eine MUMIE Task starten.
Aus Sicherheitsgründen werden sie zudem auch auf MUMIE-Servern ausgeloggt, wenn sie sich in Moodle ausloggen.</li>
</ul>';
$string['modulenameplural'] = 'MUMIE Tasks';
$string['pluginadministration'] = 'MUMIE-Administration';
$string['mumieintro'] = 'Aktivitätsbeschreibung';

// Used in index.php.
$string['nomumieinstance'] = 'In diesem Kurs gibt es keine MUMIE-Instanzen';
$string['name'] = 'Name';

// These strings are used in add activity form.
$string['mumie_form_activity_header'] = 'Allgemein';
$string['mumie_form_activity_name'] = 'Name';
$string['mumie_form_activity_server'] = 'MUMIE-Server';
$string['mumie_form_activity_server_help'] = 'Bitte wählen Sie einen MUMIE-Server, um eine aktuelle Auswahl von verfügbaren Kursen und Aufgaben zu erhalten.';
$string['mumie_form_activity_course'] = 'MUMIE-Kurs';
$string['mumie_form_activity_problem'] = "MUMIE-Aufgabe";
$string['mumie_form_activity_problem_help'] = "Eine MUMIE-Aufgabe ist eine einzelne benotete Aufgabe in MUMIE";
$string['mumie_form_activity_container'] = 'Startcontainer';
$string['mumie_form_activity_container_help'] = 'Bitte wählen Sie, ob diese Aktivität in die Moodle-Umgebung eingebunden oder in einem neuen Browser-Tab geöffnet werden soll.';
$string['mumie_form_activity_container_embedded'] = 'Eingebunden';
$string['mumie_form_activity_container_window'] = 'Neuer Browser-Tab';
$string['mumie_form_activity_language'] = 'Sprache';
$string['mumie_form_activity_language_help'] = 'Bitte wählen Sie die Sprache, in der diese MUMIE Task angezeigt werden soll.';
$string['mumie_form_server_added'] = 'MUMIE-Server wurde hinzugefügt';
$string['mumie_form_add_server_button'] = 'MUMIE-Server hinzufügen';
$string['mumie_form_coursefile'] = 'Path to MUMIE course meta file';
$string['mumie_form_points'] = 'Maximal erreichbare Punkte';
$string['mumie_form_points_help'] = 'Bitte geben Sie die maximal erreichbaren Punkte ein, die ein Student durch das Bearbeiten dieser Aufgabe erreichen kann.<br>Die Noten werden automatisch in das Moodle-Gradebook übertragen.';
$string['mumie_form_missing_server'] = 'Es konnte keine Kofiguration für die MUMIE-Server-URL gefunden werden, die zum Erstellen dieser MUMIE Task benutzt wurde.<br><br>
Die Felder <i>MUMIE-Server</i>, <i>MUMIE-Kurs</i>, <i>MUMIE-Aufgabe</i> und <i>Sprache</i> können nicht verändert werden bis ein MUMIE-Server für die folgende URL gespeichert wurde:<br><br>';
// This is taken and adapted from mod_quiz version 2018051400.
$string['completionpass'] = ' Bewertung für Bestehen notwendig';
$string['completionpass_help'] = 'Wenn diese Option aktiviert ist, wird die Aktivität als abgeschlossen betrachtet, sobald eine Bewertung vorliegt. Icons für die erfolgreiche oder erfolglose Bearbeitung können angezeigt werden,
wenn dafür eine Bewertungsgrenze festgelegt wurde.
<br><br><b>Bitte beachten Sie:</b><br>
Noten für MUMIE Tasks werden nur aktualisiert, wenn sie im Moodle-Gradebook angezeigt werden. Wenn Sie aktuelle Informationen über den Aktivitätsabschluss aller Studierneden sehen möchten,
sollten zu daher zuvor die Bewerterübersicht öffnen.';
$string['gradetopassnotset'] = 'Dieser Test hat keine Bestehensgrenze.';
$string['gradetopassmustbeset'] = 'Die Bestehensgrenze kann nicht 0 sein, da der Aktivitätsabschluss vom Erreichen dieser Grenze abhängig ist. Bitte geben Sie daher einen Wert über 0 ein.';
$string['mumie_form_due_date'] = 'Abgabefrist';
$string['mumie_form_due_date_help'] = 'Falls diese Option aktiviert ist, werden keine Noten, die nach dem gewählten Datum erzielt wurden, mit Moodle synchronisiert.';
$string['mumie_form_due_date_must_be_future'] = 'Das Datum der Abgabefrist kann nicht in der Vergangenheit liegen!';
$string['mumie_form_grade_pool'] = 'Punkte mit anderen Kursen teilen';
$string['mumie_form_grade_pool_help'] = 'Bestimmen Sie, ob MUMIE-Punktzahlen mit anderen Kursen geteilt werden.
<br>Falls diese Option aktiviert ist, werden Punkte, die für das Bearbeiten von MUMIE-Aufgaben in anderen MOODLE-Kursen vergeben wurden, auch in diesen Kurs übernommen.
<br>Falls diese Option deaktiviert ist, werden weder Punkte aus anderen MOODLE-Kursen übernommen noch werden hier erziehlte Punkte mit anderen Kursen geteilt.';
$string['mumie_form_grade_pool_warning'] = '<b style="color:red">Achtung:</b><br> Diese Entscheidung ist <b>entgültig</b> und gilt auch für alle anderen MUMIE Tasks in diesem Kurs';

// Used in course view.
$string['mumie_due_date'] = 'Abgabefrist';
$string['mumie_due_date_help'] = 'Wenn diese Option aktiviert ist, werden die Punkte von Abgaben, die nach dem ausgewählten Datum erfolgt sind, nicht in das Moodle-Gradebook übernommen.';

// Used for drag&drop functionality.
$string['parameter_missing'] = 'Die hochgeladene Datei ist nicht kompatibel!';
$string['dndupload_message'] = 'Als neue MUMIE Task hinzufügen';
$string['server_config_missing'] = '<br><br>Es konnte keine Kofiguration für die MUMIE-Server-URL gefunden werden, die zum Erstellen dieser MUMIE Task benutzt wird. Bitten Sie Ihren Administrator eine MUMIE-Server-Konfiguration für die folgende URL zu erstellen:<br><br><b>{$a}</b>';

// Capabilities.
$string['mumie:addinstance'] = 'Neue MUMIE Task hinzufügen';
$string['mumie:viewgrades'] = 'Alle Noten einer MUMIE Task in einem Kurs sehen';
