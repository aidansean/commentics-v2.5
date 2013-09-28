<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/

This file is part of Commentics.

Commentics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Commentics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Commentics. If not, see <http://www.gnu.org/licenses/>.

Text to help preserve UTF-8 file encoding: 汉语漢語.
*/

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

/* Error box */
define('CMTX_ERROR_NUMBER', 'Es trat %d Fehler beim Verarbeiten des Kommentars auf.');
define('CMTX_ERRORS_NUMBER', 'Es traten %d Fehler beim Verarbeiten des Kommentars auf.');
define('CMTX_ERROR_CORRECTION', 'Bitte den Fehler korrigieren und das Formular nochmals abschicken:');
define('CMTX_ERRORS_CORRECTION', 'Bitte die Fehler korrigieren und das Formular nochmals abschicken:');

/* Preview box */
define('CMTX_PREVIEW_TEXT', 'Vorschau');

/* Approval box */
define('CMTX_APPROVAL_OPENING', 'Danke.');
define('CMTX_APPROVAL_TEXT', 'Ihr Kommentar wartet auf Prüfung.');

/* Success box */
define('CMTX_SUCCESS_OPENING', 'Danke.');
define('CMTX_SUCCESS_TEXT', 'Ihr Kommentar wurde hinzugefügt.');

/* Error messages */
define('CMTX_ERROR_MESSAGE_NO_NAME', 'Das Eingabefeld für den Namen darf nicht leer sein. Bitte geben Sie Ihren  Namen ein.');
define('CMTX_ERROR_MESSAGE_ONE_NAME', 'Es darf nur ein Wort im Eingabefeld für den Namen eingeben werden. Bitte geben Sie einen neuen Namen ein.');
define('CMTX_ERROR_MESSAGE_START_NAME', 'The name must start with a letter. Please start it with a letter.');
define('CMTX_ERROR_MESSAGE_INVALID_NAME', 'The name can only contain these characters: A-Z \' & . -');
define('CMTX_ERROR_MESSAGE_RESERVED_NAME', 'Der eingegebene Name ist reserviert. Bitte wählen Sie einen anderen Namen.');
define('CMTX_ERROR_MESSAGE_BANNED_NAME', 'Der eingegebene Name ist nicht erlaubt. Bitte wählen Sie einen anderen Namen.');
define('CMTX_ERROR_MESSAGE_DUMMY_NAME', 'Der eingegebene Name ist offenbar nicht Ihr Name. Bitte verwenden Sie Ihren wahren Namen.');
define('CMTX_ERROR_MESSAGE_LINK_IN_NAME', 'Der eingegebene Name enthält einen Link. Bitte geben Sie Ihren Namen ein.');
define('CMTX_ERROR_MESSAGE_NO_EMAIL', 'Das Eingabefeld für die E-Mail darf nicht leer sein. Bitte geben Sie Ihre  E-Mail-Adresse ein.');
define('CMTX_ERROR_MESSAGE_INVALID_EMAIL', 'Die eingegebene E-Mail-Adresse scheint nicht korrekt zu sein. Bitte überprüfen Sie Ihre Eingabe.');
define('CMTX_ERROR_MESSAGE_RESERVED_EMAIL', 'Die eingegebene E-Mail-Adresse ist reserviert. Bitte geben Sie eine andere E-Mail-Adresse ein.');
define('CMTX_ERROR_MESSAGE_BANNED_EMAIL', 'Die eingegebene E-Mail-Adresse ist verboten. Bitte geben Sie eine andere E-Mail-Adresse ein.');
define('CMTX_ERROR_MESSAGE_DUMMY_EMAIL', 'Die eingegebene eMail-Adresse ist offenbar nicht Ihre. Bitte geben Sie Ihre wahre eMail-Adresse ein.');
define('CMTX_ERROR_MESSAGE_NO_WEBSITE', 'Das Eingabefeld für die Webseite darf nicht leer sein. Bitte geben Sie Ihre  Webseite ein.');
define('CMTX_ERROR_MESSAGE_INVALID_WEBSITE', 'Die eingegebene Webseiten-Adresse scheint nicht korrekt zu sein. Bitte überprüfen Sie Ihre Eingabe.');
define('CMTX_ERROR_MESSAGE_RESERVED_WEBSITE', 'Die eingegebene Webseiten-Adresse ist reserviert. Bitte geben Sie eine  andere Webseiten-Adresse ein.');
define('CMTX_ERROR_MESSAGE_BANNED_WEBSITE_IN_WEBSITE', 'Die eingegebene Webseiten-Adresse ist nicht erlaubt. Bitte entfernen Sie sie.');
define('CMTX_ERROR_MESSAGE_BANNED_WEBSITE_IN_COMMENT', 'Die Webseiten-Adresse in Deinem Kommentar ist nicht erlaubt. Bitte entfernen Sie sie.');
define('CMTX_ERROR_MESSAGE_DUMMY_WEBSITE', 'Die eingegebene Webseiten-Adresse ist offenbar nicht Ihre. Bitte geben Sie Ihre wahre Webseiten-Adresse ein.');
define('CMTX_ERROR_MESSAGE_NO_TOWN', 'Das Eingabefeld für die Stadt darf nicht leer sein. Bitte geben Sie Ihre Stadt ein.');
define('CMTX_ERROR_MESSAGE_START_TOWN', 'The town must start with a letter. Please start it with a letter.');
define('CMTX_ERROR_MESSAGE_INVALID_TOWN', 'The town can only contain these characters: A-Z \' & . -');
define('CMTX_ERROR_MESSAGE_RESERVED_TOWN', 'Die eingegebene Stadt ist reserviert. Bitte geben Sie eine andere Stadt ein.');
define('CMTX_ERROR_MESSAGE_BANNED_TOWN', 'Die eingegebene Stadt ist nicht erlaubt. Bitte geben Sie eine andere Stadt ein.');
define('CMTX_ERROR_MESSAGE_DUMMY_TOWN', 'Bitte geben Sie eine andere Stadt ein.');
define('CMTX_ERROR_MESSAGE_LINK_IN_TOWN', 'Die Angabe enthält einen Link. Bitte geben Sie Ihre Stadt ein.');
define('CMTX_ERROR_MESSAGE_NO_COUNTRY', 'Es wurde kein Land ausgewählt. Bitte wählen Sie Ihr Land aus.');
define('CMTX_ERROR_MESSAGE_INVALID_COUNTRY', 'Das ausgewählte Land ist ungültig. Bitte versuchen Sie es erneut.');
define('CMTX_ERROR_MESSAGE_COUNTRY_SEARCH', 'Das angebene Land konnte nicht gefunden werden. Bitte versuchen Sie es erneut.');
define('CMTX_ERROR_MESSAGE_NO_RATING', 'Es wurde keine Bewertung abgegeben. Bitte wählen Sie Ihre Bewertung aus.');
define('CMTX_ERROR_MESSAGE_INVALID_RATING', 'Die gewählte Rating ist ungültig. Bitte versuchen Sie es erneut.');
define('CMTX_ERROR_MESSAGE_INVALID_REPLY', 'Der Kommentar, den Sie zu beantworten sind, ist ungültig. Bitte versuchen Sie es erneut.');
define('CMTX_ERROR_MESSAGE_NO_COMMENT', 'Das Kommentarfeld darf nicht leer sein. Bitte geben Sie Ihren Kommentar ein.');
define('CMTX_ERROR_MESSAGE_COMMENT_MIN', 'Der eingegebene Kommentar war zu kurz. Bitte geben Sie einen längeren Kommentar ein.');
define('CMTX_ERROR_MESSAGE_COMMENT_MAX', 'Der eingegebene Kommentar war zu lang. Bitte geben Sie einen kürzeren Kommentar ein.');
define('CMTX_ERROR_MESSAGE_COMMENT_MAX_LINES', 'Der Kommentar enthält zu viele Zeilen. Bitte verwenden Sie weniger Zeilen.');
define('CMTX_ERROR_MESSAGE_COMMENT_RESUBMIT', 'Der Kommentar wurde bereits abgegeben.');
define('CMTX_ERROR_MESSAGE_SMILIES_MAX', 'Der Kommentar enthält zu viele Smilies (Maximal: %d)');
define('CMTX_ERROR_MESSAGE_MILD_SWEARING', 'Der Kommentar enthält beleidigende Worte. Bitte entfernen Sie diese Worte.');
define('CMTX_ERROR_MESSAGE_STRONG_SWEARING', 'Beschimpfungen sind nicht erlaubt. Bitte entfernen Sie die betreffenden Worte aus Ihrem Kommentar.');
define('CMTX_ERROR_MESSAGE_SPAMMING', 'Spam ist nicht erlaubt. Bitte entfernen Sie den Spam aus Ihrem Kommentar.');
define('CMTX_ERROR_MESSAGE_LONG_WORD', 'Der eingegebene Kommentar enthält ein zu langes Wort. Bitte kürzen oder entfernen Sie das Wort.');
define('CMTX_ERROR_MESSAGE_CAPITALS', 'Der eingegebene Kommentar enthält zu viele Großbuchstaben. Bitte verwenden Sie  weniger Großbuchstaben.');
define('CMTX_ERROR_MESSAGE_LINK_IN_COMMENT', 'Der Kommentar enthält einen Link. Bitte entfernen Sie den Link.');
define('CMTX_ERROR_MESSAGE_REPEATS', 'Der Kommentar enthält sich wiederholende Zeichen. Bitte entfernen Sie diese.');
define('CMTX_ERROR_MESSAGE_BB_INVALID_LINK', 'The comment contains an invalid BB Code link. Please correct it.');
define('CMTX_ERROR_MESSAGE_BB_INVALID_EMAIL', 'The comment contains an invalid BB Code email. Please correct it.');
define('CMTX_ERROR_MESSAGE_BB_INVALID_IMAGE', 'The comment contains an invalid BB Code image. Please correct it.');
define('CMTX_ERROR_MESSAGE_BB_INVALID_VIDEO', 'The comment contains an invalid BB Code video. Please correct it.');
define('CMTX_ERROR_MESSAGE_NO_ANSWER', 'Das Antwortfeld für die Frage darf nicht leer sein. Bitte geben Sie Ihre Antwort ein.');
define('CMTX_ERROR_MESSAGE_WRONG_ANSWER', 'Die Antwort auf die Frage war falsch. Bitte versuchen Sie es noch einmal.');
define('CMTX_ERROR_MESSAGE_NO_CAPTCHA', 'Das Eingabefeld für das Captcha darf nicht leer sein. Bitte geben Sie die Zeichen des Bildes ein.');
define('CMTX_ERROR_MESSAGE_WRONG_CAPTCHA', 'Die eingegebenen Zeichen des Captcha-Bildes waren nicht korrekt. Bitte versuchen Sie  es noch einmal.');
define('CMTX_ERROR_MESSAGE_FLOOD_CONTROL_DELAY', 'Bitte warten Sie noch etwas, um einen neuen Kommentar einzugeben.');
define('CMTX_ERROR_MESSAGE_FLOOD_CONTROL_MAXIMUM', 'Es wurde zu viele Kommentare in zu kurzer Zeit abgegeben. Bitte warten Sie noch etwas.');
define('CMTX_ERROR_MESSAGE_NO_REFERRER', 'Bitte aktivieren Sie Ihren Web-Browser auf Referrer-Informationen zu senden.');
define('CMTX_ERROR_MESSAGE_INCORRECT_REFERRER', 'Bitte aktivieren Sie Ihren Web-Browser, Referrer-Informationen zu senden.');
define('CMTX_ERROR_MESSAGE_MAXIMUMS', 'Bitte aktivieren Sie Ihren Web-Browser, um maximale Feldlängen zu respektieren.');
define('CMTX_ERROR_MESSAGE_HONEYPOT', 'Ein verborgenes Feld zur Abwehr von Bots wurde ausgefüllt. Bitte lassen Sie es leer.');
define('CMTX_ERROR_MESSAGE_MIN_TIME', 'Das Formular wurde zu schnell abgeschickt. Bitte warten Sie etwas.');
define('CMTX_ERROR_MESSAGE_MISSING_DATA', 'Einige Daten konneten nicht erkannt werden. Bitte schicken Sie das Forumlar erneut ab.');

/* Messages displayed to user when banned */
define('CMTX_BAN_MESSAGE_BANNED_NOW', '<p>Sie wurden ausgeschlossen.</p><p>Dies kann verschiedene Gründe haben wie zum Beispiel: Beschimpfungen, Spam oder ein anderer Verstoß gegen die Nutzungsbedingungen.</p><p>Wenn Sie meinen, dass dies ein Fehler ist, dann melden Sie sich bitte beim Administrator.</p>');
define('CMTX_BAN_MESSAGE_BANNED_PREVIOUSLY', 'Sorry, Sie wurden bereits ausgeschlossen.');

/* Ban reasons */
define('CMTX_BAN_REASON_NO_SECURITY_KEY', 'Kein Sicherheitsschlüssel.');
define('CMTX_BAN_REASON_INCORRECT_SECURITY_KEY', 'Der Sicherheitsschlüssel war nicht korrekt.');
define('CMTX_BAN_REASON_NO_RESUBMIT_KEY', 'No resubmit key.');
define('CMTX_BAN_REASON_INVALID_RESUBMIT_KEY', 'Invalid resubmit key.');
define('CMTX_BAN_REASON_INJECTION', 'Unerlaubter Code eingeschleust.');
define('CMTX_BAN_REASON_RESERVED_NAME', 'Es wurde ein reservierter Name eingegeben.');
define('CMTX_BAN_REASON_BANNED_NAME', 'Es wurde ein ausgeschlossener Name eingegeben.');
define('CMTX_BAN_REASON_DUMMY_NAME', 'Es wurde ein Dummy-Name eingegeben.');
define('CMTX_BAN_REASON_LINK_IN_NAME', 'Link im Namen.');
define('CMTX_BAN_REASON_RESERVED_EMAIL', 'Es wurde eine reservierte E-Mail-Adresse eingegeben.');
define('CMTX_BAN_REASON_BANNED_EMAIL', 'Es wurde eine ausgeschlossene E-Mail-Adresse eingegeben.');
define('CMTX_BAN_REASON_DUMMY_EMAIL', 'Es wurde eine Dummy-E-Mail-Adresse eingegeben.');
define('CMTX_BAN_REASON_RESERVED_WEBSITE', 'Es wurde eine reservierte Webseite eingegeben.');
define('CMTX_BAN_REASON_BANNED_WEBSITE_IN_WEBSITE', 'Es wurde eine ausgeschlossene Website eingegeben.');
define('CMTX_BAN_REASON_BANNED_WEBSITE_IN_COMMENT', 'Es wurde eine ausgeschlossene Website im Kommentar eingegeben.');
define('CMTX_BAN_REASON_DUMMY_WEBSITE', 'Es wurde eine Dummy-Webseite eingegeben.');
define('CMTX_BAN_REASON_RESERVED_TOWN', 'Es wurde eine reservierte Stadt eingegeben.');
define('CMTX_BAN_REASON_BANNED_TOWN', 'Es wurde eine ausgeschlossene Stadt eingegeben.');
define('CMTX_BAN_REASON_DUMMY_TOWN', 'Dummy-Stadt eingetragen.');
define('CMTX_BAN_REASON_LINK_IN_TOWN', 'Link in der Stadt.');
define('CMTX_BAN_REASON_MILD_SWEARING', 'Beschimpfung verwendet.');
define('CMTX_BAN_REASON_STRONG_SWEARING', 'Starke Beschimpfung verwendet.');
define('CMTX_BAN_REASON_SPAMMING', 'Spam im Kommentar.');
define('CMTX_BAN_REASON_CAPITALS', 'Zu viele Großbuchstaben verwendet.');
define('CMTX_BAN_REASON_LINK_IN_COMMENT', 'Link im Kommentar.');
define('CMTX_BAN_REASON_REPEATS', 'Wiederholter Kommentar.');

/* Approval reasons */
define('CMTX_APPROVE_REASON_ALL', 'Alles genehmigt.');
define('CMTX_APPROVE_REASON_RESERVED_NAME', 'Es wurde ein reservierter Name eingegeben.');
define('CMTX_APPROVE_REASON_BANNED_NAME', 'Es wurde ein ausgeschlossener Name eingegeben.');
define('CMTX_APPROVE_REASON_DUMMY_NAME', 'Es wurde ein Dummy-Name eingegeben.');
define('CMTX_APPROVE_REASON_LINK_IN_NAME', 'Link im Namen.');
define('CMTX_APPROVE_REASON_RESERVED_EMAIL', 'Es wurde eine reservierte E-Mail-Adresse eingegeben.');
define('CMTX_APPROVE_REASON_BANNED_EMAIL', 'Es wurde eine ausgeschlossene E-Mail-Adresse eingegeben.');
define('CMTX_APPROVE_REASON_DUMMY_EMAIL', 'Es wurde eine Dummy-EMail-Adresse eingegeben.');
define('CMTX_APPROVE_REASON_WEBSITE_ENTERED', 'Webseite eingegeben.');
define('CMTX_APPROVE_REASON_RESERVED_WEBSITE', 'Es wurde eine reservierte Webseite eingegeben.');
define('CMTX_APPROVE_REASON_BANNED_WEBSITE_IN_WEBSITE', 'Es wurde eine ausgeschlossene Website eingegeben.');
define('CMTX_APPROVE_REASON_BANNED_WEBSITE_IN_COMMENT', 'Es wurde eine ausgeschlossene Website im Kommentar eingegeben.');
define('CMTX_APPROVE_REASON_DUMMY_WEBSITE', 'Es wurde eine Dummy-Webseite eingegeben.');
define('CMTX_APPROVE_REASON_RESERVED_TOWN', 'Es wurde eine reservierte Stadt eingetragen.');
define('CMTX_APPROVE_REASON_BANNED_TOWN', 'Es wurde eine ausgeschlossene Stadt eingetragen.');
define('CMTX_APPROVE_REASON_DUMMY_TOWN', 'Es wurde eine Dummy-Stadt eingetragen.');
define('CMTX_APPROVE_REASON_LINK_IN_TOWN', 'Link in der Stadt.');
define('CMTX_APPROVE_REASON_LINK_IN_COMMENT', 'Link im Kommentar.');
define('CMTX_APPROVE_REASON_REPEATS', 'Wiederholter Kommentar.');
define('CMTX_APPROVE_REASON_IMAGE_ENTERED', 'Bild verwendet.');
define('CMTX_APPROVE_REASON_VIDEO_ENTERED', 'Video verwendet.');
define('CMTX_APPROVE_REASON_MILD_SWEARING', 'Beschimpfung.');
define('CMTX_APPROVE_REASON_STRONG_SWEARING', 'Starke Beschimpfung.');
define('CMTX_APPROVE_REASON_SPAMMING', 'Spam.');
define('CMTX_APPROVE_REASON_CAPITALS', 'Zu viele Großbuchstaben verwendet.');
define('CMTX_APPROVE_REASON_AKISMET', 'Akismet.');

?>