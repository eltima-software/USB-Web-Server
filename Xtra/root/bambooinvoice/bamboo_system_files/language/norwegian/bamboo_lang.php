<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['accounts_change_password'] = 'Change Password'; // TO BE TRANSLATED
$lang['accounts_admin_account_create_success'] = 'Admin konto opprettet';
$lang['accounts_admin_account_create_fail'] = 'Problemer under opprettelse av admin konto';
$lang['accounts_admin_account_delete_success'] = 'Admin konto slettet';
$lang['accounts_admin_account_edit'] = 'Edit Account'; // TO BE TRANSLATED
$lang['accounts_admin_account_edit_success'] = 'Account successfully edited'; // TO BE TRANLSATED
$lang['accounts_admin_account_edit_fail'] = 'Problem editing account'; // TO BE TRANLSATED
$lang['accounts_admin_account'] = 'Admin Account'; // TO BE TRANLSATED
$lang['accounts_admin_account_primary'] = 'Primary Admin Account'; // TO BE TRANLSATED
$lang['accounts_admin_account_delete_fail'] = 'Problemer ved sletting av admin konto';

$lang['actions_cancel'] = 'Avbryt';
$lang['actions_change'] = 'Endre';
$lang['actions_create_invoice'] = 'Lag faktura';
$lang['actions_donate'] = 'Donér';
$lang['actions_delete'] = 'Slett';
$lang['actions_edit'] = 'Endre';
$lang['actions_required_fields'] = 'Påkrevde felter';
$lang['actions_select_below'] = 'velg under';

$lang['bambooinvoice_logo'] = '<span class=\'bamboo_invoice_bam\'>Bamboo</span><span class=\'bamboo_invoice_inv\'>Invoice</span>';
$lang['bambooinvoice_version'] = 'Versjon';

$lang['clients_add_contact'] = 'Legg til en kontakt';
$lang['clients_address1'] = 'Addresse1';
$lang['clients_address2'] = 'Addresse2';
$lang['clients_assigned_to_them'] = 'Du er iferd med å <strong class="error">slette denne klienten permanent</strong> , og <strong class="error">samtlige fakturaerassosiert med dem</strong>. Er du sikker på at du vil dette?';
$lang['clients_cancel_add_contact'] = 'Avbryt legg til kontakt';
$lang['clients_city'] = 'By';
$lang['clients_client_has'] = 'Denne klienten har ';
$lang['clients_clients_registered'] = 'klienter registrert';
$lang['clients_contact_add'] = 'Kan ikke legge til denne kontakten. Vennligst merk at fornavn, etternavn samt gyldig epost er påkrevd.';
$lang['clients_contact_delete_fail'] = 'Kan ikke slette denne kontakten.';
$lang['clients_contacts'] = 'Kontakter';
$lang['clients_country'] = 'Land';
$lang['clients_create_new_client'] = 'Legg til ny klient';
$lang['clients_created'] = 'Ny klient lagt til';
$lang['clients_delete_all_invoices'] = 'Slett klient samt alle fakturaer';
$lang['clients_delete_client'] = 'Slett klient';
$lang['clients_delete_contact'] = 'Slett kontakt';
$lang['clients_deleted'] = 'Klienten er slettet';
$lang['clients_deleted_error'] = 'Klienten kunne ikke slettes'; 
$lang['clients_edit_client'] = 'Endre klient';
$lang['clients_edit_contact'] = 'Endre kontakt';
$lang['clients_edited'] = 'Klient oppdatert';
$lang['clients_edited_contact_info'] = 'Kontaktinformasjon er oppdatert';
$lang['clients_email'] = 'Epost';
$lang['clients_first_name'] = 'Fornavn';
$lang['clients_id'] = 'Klient Id';
$lang['clients_last_name'] = 'Etternavn';
$lang['clients_name'] = 'Klient navn';
$lang['clients_new_contact_fail'] = 'Kan ikke legge til denne kontakten. Merk at fornavn, etternavn samt gyldig epost er påkrevt.';
$lang['clients_no_invoice_listed'] = 'Det er ingen kontakter listet for';
$lang['clients_notes'] = 'Notater';
$lang['clients_phone'] = 'Telefon';
$lang['clients_postal'] = 'Postadresse';
$lang['clients_province'] = 'Fylke';
$lang['clients_save_client'] = 'Lagre klient';
$lang['clients_title'] = 'Tittel';
$lang['clients_to'] = 'til';
$lang['clients_update_client'] = 'Oppdater klient';
$lang['clients_website'] = 'Hjemmeside';
$lang['clients_you_have'] = 'Du har ';

$lang['error_date_fill'] = 'Noe gikk galt. Vennligst påse at dato er lagt inn i fommat ÅÅÅÅ-MM-DD, og at summen må være et nummer. Prøv igjen.';
$lang['error_date_format'] = 'Dato må legges inn i fommat ÅÅÅÅ-MM-DD';
$lang['error_email_recipients'] = 'Velg minst 1 mottaker for denne fakturaen';
$lang['error_field_required'] = 'Dette feltet er påkrevd';
$lang['error_login_password'] = 'Vennligst velg et passord';
$lang['error_login_username'] = 'Vennligst velg et brukernavn';
$lang['error_problem_editing'] = 'Det oppsto et problem med å endre denne fakturaen. Vær vennlig å rapporter feilen invoice_controller_edit';
$lang['error_problem_inserting'] = 'Det oppsto en problem med å legge inn';
$lang['error_problem_saving'] = 'Det oppsto et problem med å lagre denne fakturaen for utsendelse.';
$lang['error_selection'] = 'Valget ditt hadde ingen fakturaer.';

$lang['install_explain'] = 'Din epost er i bruk både som ditt &quot;brukernavn&quot; for innlogging, og også for en hvilken som helst annen epost-funskjon, så som utsendelse av faktura, tilbakestilling av passord, etc.  Navnet til hovedkontakten blir brukt i &quot;Fra&quot; feltet ved utsendelse av fakturaer via epost.';
$lang['install_install'] = 'Installer';
$lang['install_welcome'] = 'Velkommen til '.$lang['bambooinvoice_logo'].'.  For å installere, trenger jeg å vite litt om deg.';

$lang['invoice_add_note'] = 'Legg til notat';
$lang['invoice_all_clients'] = 'Alle klienter';
$lang['invoice_all_invoices'] = 'Alle fakturaer';
$lang['invoice_amount'] = 'Sum';
$lang['invoice_amount_item'] = 'Sum';
$lang['invoice_amount_error'] = 'Vennligst tast inn et beløp';
$lang['invoice_amount_numbers_only'] = 'Kun nummerere..';
$lang['invoice_amount_paid'] = 'Sum betalt';
$lang['invoice_amount_outstanding'] = 'Sum til forfall';
$lang['invoice_bill_to'] = 'Faktura til';
$lang['invoice_client'] = 'Klient';
$lang['invoice_client_id'] = 'Klient Id';
$lang['invoice_closed'] = 'Avsluttet';
$lang['invoice_comment'] = 'Notater';
$lang['invoice_comment_success'] = 'Notat lagt til, du kan sjekke nedenfor.';
$lang['invoice_contact_add'] = 'Det finnes ingen kontakter tilgjengelig for å sende denne fakturaen til. FOr å legge til, bruk';
$lang['invoice_details'] = 'Invoice Details';
$lang['invoice_date_issued'] = 'Doto utstedt';
$lang['invoice_date_issued_full'] = 'Dato utstedt (i format ÅÅÅÅ-MM-DD)';
$lang['invoice_date_paid_full'] = 'Dato betalt (i format ÅÅÅÅ-MM-DD)';
zlang['invoice_email_demo'] = 'For å unngå uønsket bruk av denne demoen, eposter blir <em>ikke</em> sent. For å se en kopi av PDF-vedleggt, velg &ldquo;Lag faktura&rdquo; fra menyen.';
$lang['invoice_email_invoice_to'] = 'Send faktura per epost til';
$lang['invoice_email_message'] = 'Epost beskjed';
$lang['invoice_email_no_recipient'] = 'Gå tilbake og velg hvem fakturaen skal sendes til.';
$lang['invoice_email_success'] = 'Fakura ble sendt per epost. Du kan se fakturaen&rsquo;s historikk nedenfor.';
$lang['invoice_export_to'] = 'Eksporter dine faktura-data til';
$lang['invoice_generated_by'] = 'Faktura generert av';
$lang['invoice_history_comments'] = 'Faktura-historikk &amp; Private notater';
$lang['invoice_invoice'] = 'Faktra';
$lang['invoice_blind_copy_me'] = 'Send meg en kopi av denne eposten';
$lang['invoice_invoice_delete_success'] = 'Faktura er slettet';
$lang['invoice_invoice_edit_success'] = 'Faktura er endret';
$lang['invoice_is_tax_exempt'] = 'er momsfritt';
$lang['invoice_item'] = 'Produkt';
$lang['invoice_last_used'] = 'siste nummer brukt ';
$lang['invoice_new_item'] = 'Nytt produkt';
$lang['invoice_new_invoice'] = 'Ny faktura';
$lang['invoice_new_invoice_error'] = 'Ny faktura error';
$lang['invoice_new_invoice_to'] = 'Ny faktura til';
$lang['invoice_no_payments_entered'] = 'Ingen betaling er lagt inn for denne faktura. For å legge inn en betaling, bruk &quot;Legg inn betaling&quot; opsjonen i menyen.';
$lang['invoice_not_sent'] = 'Fatura ble ikke sendt til din klient. For å sende, bruk &quot;Send faktura per epost&quot; opsjonen i menyen.';
$lang['invoice_not_taxable'] = 'Momsfri';
$lang['invoice_not_unique'] = 'Fakturanummeret er ikke unikt';
$lang['invoice_note'] = 'Fatura notat';
$lang['invoice_note_max_chars'] = '(maksimum 255 tegn';
$lang['invoice_no_invoice_match'] = 'Det finnes ingen fakturaer i systemet som samsvarer med kriteriene';
$lang['invoice_number'] = 'Faktura nummer';
$lang['invoice_open'] = 'Åpen';
$lang['invoice_or'] = 'eller';
$lang['invoice_or_new_client'] = 'eller legg til ny klient';
$lang['invoice_overdue'] = 'forfalt';
$lang['invoice_overdue_invoices'] = 'forfalt(e) faktura(er)';
$lang['invoice_payment_enter'] = 'Legg inn betaling for';
$lang['invoice_payment_history'] = 'Betalings historikk';
$lang['invoice_payment_note_blank'] = 'There was no payment note entered'; // TO BE TRANSLATED
$lang['invoice_payment_success'] = 'Faktura-betaling ble lagt til.';
$lang['invoice_payment_term'] = 'Betalingsbetingelser';
$lang['invoice_premenently_delete'] = 'Du er i ferd med å <strong class="error">slette permanent</strong> faktura';
$lang['invoice_problem_creating'] = 'Det oppsto et problem med å lage din faktura.';
$lang['invoice_quantity'] = 'Antall';
$lang['invoice_return_invoice_view'] = 'returner til fakturaoversikt';
$lang['invoice_save_edited_invoice'] = 'Lagre endret faktura';
$lang['invoice_select_client'] = 'Velg klient';
$lang['invoice_send_to'] = 'Send faktura til';
$lang['invoice_sent_to'] = 'Faktura sendt til';
$lang['invoice_status'] = 'Status';
$lang['invoice_summary'] = 'Oversikt';
$lang['invoice_sure_delete'] = 'Er du sikker at du vil gjøre dette? ';
$lang['invoice_use_tax_by_default'] = 'Use Tax by Default';
$lang['invoice_tax_name'] = 'Navn på skatt 1 (moms?)';
$lang['invoice_tax_rate'] = 'Skattesats 1';
$lang['invoice_tax2_description'] = 'Navn på skatt 2';
$lang['invoice_tax2_rate'] = 'Skattesats 2';
$lang['invoice_tax_exempt'] = 'Merk: Denne klient er untatt fra skatt/moms';
$lang['invoice_tax_status'] = 'Moms status';
$lang['invoice_taxable'] = 'Momspliktig';
$lang['invoice_taxes'] = 'Taxes'; // TO BE TRANSLATED
$lang['invoice_there_are_currently'] = 'Det er for tiden';
$lang['invoice_total'] = 'Totalt';
$lang['invoice_work_description'] = 'Arbeidsbeskrivelse';
$lang['invoice_you_may_now'] = 'Du kan nå';
$lang['invoice_you'] = 'Du';

$lang['login_allow_login'] = 'Legg til ny administrator-konto';
$lang['login_caps_lock'] = 'Pass på at <em>Caps Lock</em> ikke er på';
$lang['login_forgot_password'] = 'Glemt passord';
$lang['login_login'] = 'Logg in';
$lang['login_logout'] = 'Logg ut';
$lang['login_logout_confirm'] = 'Du har valgt å logge ut. Er du sikker?';
$lang['login_logout_success1'] = "Du har blitt logget ut. Om du vil kan du";
$lang['login_logout_success2'] = 'logg inn igjen';
$lang['login_password'] = 'Passord';
$lang['login_password_confirm'] = 'Konfirmer passord';
$lang['login_password_email'] = "Kan sende passord til den epost-adressen du ble reigistrert med. Dersom du har glemt det eller vil resette det, fyll ut skjemaet under.";
$lang['login_password_email1'] = 'Ditt passord er endret. Ditt nye passord er';
$lang['login_password_email2'] = 'og kan nå bli brukt til';
$lang['login_password_fail'] = "Noe gikk galt. Jeg vet dette ikke er veldig hjelpfulI error, det ser ut som litt debugging trengs.";
$lang['login_password_reset_demo'] = 'For demoen, dette er deaktivert, men du bør ha mottatt en mail med tilbakestillingsinformasjon.';
$lang['login_password_reset_disabled'] = 'For demo-versjonen, passord tilbakestilling er deaktivert.';
$lang['login_password_reset_email1'] = 'Noen (sansynligvis deg) har bedt om en tilbakestilling av passord for din BambooInvoice konto.';
$lang['login_password_reset_email2'] = 'For å tilbakestille nå, følg linken til din hjemmeside:';
$lang['login_password_reset_email3'] = "Dersom du ikke har bedt om dette, vennligst se bort ifra denne eposten, og beklager ulempen.";
$lang['login_password_reset_title'] = 'BambooInvoice passord tilbakestilling';
$lang['login_password_reset_unable'] = 'Kunne ikke tilbakestille ditt passord, prøv igjen.';
$lang['login_password_sent'] = 'Din passord-endring har blitt sendt til epost';
$lang['login_password_submit'] = 'Send passord';
$lang['login_password_success'] = 'Din passord-endring er iverkstilt, og har blitt sendt per epost.';
$lang['login_remember_me'] = 'Husk meg';
$lang['login_username'] = 'Epost';
$lang['login_wrong_password'] = 'Beklager, brukernavnet og/eller passordet ble ikke funnet, eller var halt. Vennligst prøv igjen.';

$lang['menu_accounts'] = 'Kontoer';
$lang['menu_bugs'] = 'Bugs';
$lang['menu_catchphrase'] = 'Enkelt,<br />Vakkert,<br />Open Kildekode,<br />Online Fakturering';
$lang['menu_catchphrase_nobreak'] = 'Enkelt, Vakkert, Open Kildekode, Online Fakturering';
$lang['menu_changelog'] = 'Endrings-logg';
$lang['menu_clients'] = 'Klienter';
$lang['menu_credits'] = 'Kreditter';
$lang['menu_delete_invoice'] = 'Slett faktura';
$lang['menu_duplicate_invoice'] = 'Kopier faktura';
$lang['menu_did_you_know'] = 'Visste du?';
$lang['menu_edit_invoice'] = 'Endre faktura';
$lang['menu_email_invoice'] = 'Send faktura per epost';
$lang['menu_enter_payment'] = 'Legg inn betaling';
$lang['menu_faq'] = 'Vanlige spørsmål';
$lang['menu_generate_pdf'] = 'Generer PDF';
$lang['menu_help'] = 'Hjelp';
$lang['menu_invoice_summary'] = 'Faktura oversikt';
$lang['menu_private_note'] = 'Private notater';
$lang['menu_invoices'] = 'Fakturaer';
$lang['menu_logout'] = 'Logg ut';
$lang['menu_new_invoice'] = 'Ny faktura';
$lang['menu_print_invoice'] = 'Skriv ut faktura';
$lang['menu_reports'] = 'Rapporter';
$lang['menu_roadmap'] = 'Veibeskrivelse';
$lang['menu_root_system'] = 'Rot-system';
$lang['menu_see_also'] = 'Se også';
$lang['menu_settings'] = 'Instillinger';
$lang['menu_welcome'] = 'Welcome'; // TO BE TRANSLATED
$lang['menu_utilities'] = 'Funksjoner';

$lang['notice_english_only'] = '';
$lang['notice_generated_by'] = 'Generert av';

$lang['reports_back_to_reports'] = 'tilbake til rapporter';
$lang['reports_collected'] = 'innsamlet';
$lang['reports_end_date'] = 'Slutt-dato (åååå-mm-dd)';
$lang['reports_first_quarter'] = 'første kvartal';
$lang['reports_fourth_quarter'] = 'fjerde kvartal';
$lang['reports_generate_report'] = 'Generer rapport';
$lang['reports_invoices_issued_year'] = 'fakturaer utstedt i år';
$lang['reports_legend'] = 'Legend';
$lang['reports_second_quarter'] = 'andre kvartal';
$lang['reports_start_date'] = 'Start dato (åååå-mm-dd)';
$lang['reports_third_quarter'] = 'tredje kvartal';
$lang['reports_year_to_date'] = 'År til denne dato';
$lang['reports_no_data'] = 'Det finnes ingen data for valgte datoer.';
$lang['reports_yearly_income'] = 'Årlig inntekt';

$lang['settings_account_settings'] = 'Konto-instillinger';
$lang['settings_invoice_settings'] = 'Faktura-instillinger';
$lang['settings_advanced_settings'] = 'Avanserte instillinger';

$lang['settings_company_name'] = 'Firmanavn';
$lang['settings_currency_symbol'] = 'Valuta-symbol';
$lang['settings_currency_type'] = 'Valuta';
$lang['settings_days_payment_due'] = 'Dager til faktura-forfall';
$lang['settings_default_note'] = 'Standard fakturanotat';
$lang['settings_display_branding'] = 'Vis BambooInvoice Branding';
$lang['settings_logo'] = 'Logo';
$lang['settings_modify_fail'] = 'Et problem oppsto når dine instillinger ble modifisert.';
$lang['settings_modify_success'] = 'Instillingene ble modifisert.';
$lang['settings_note_max_chars'] = '(maksimum 255 tegn)';
$lang['settings_primary_contact'] = 'Hovedkontakt';
$lang['settings_primary_email'] = 'Hovedkontakt epostadresse';
$lang['settings_primary_email_message'] = 'Endring av denne eposten vil også endre eposten du logger inn med.';
$lang['settings_save_settings'] = 'Lagre instillinger';
$lang['settings_save_invoices'] = 'Lagre fakturaer';
$lang['settings_save_invoices_warning'] = '<strong>Advarsel:</strong> Deaktivering av dette vil ta bort alle lagrede fakturaer.';
$lang['settings_settings_default'] = 'Disse instillingene er standard';
$lang['settings_short_language'] = 'no';
$lang['settings_tax_settings'] = 'Tax Settings'; // to be translated
$lang['settings_tax_code'] = 'Org.nr.';
$lang['settings_will_use'] = 'vil bli brukt når du genererer fakturaer eller klienter.';

$lang['utilities_download_backup'] = 'Last ned backup';
$lang['utilities_automatic_version_check'] = 'Sjekk for oppdateringer automaisk';
$lang['utilities_phpinfo'] = 'PHP informasjon';
$lang['feature_not_available'] = 'Denne opsjonen er ikke tilgjengelig i demoen.';
$lang['utilities_new_version_available'] = "En ny versjon av BambooInvoice er nå tilgjengelig. "; // space after period
$lang['utilities_up_to_date'] = "Du bruker nyeste versjon av BambooInvoice.";
$lang['utilities_connection_failed'] = "Kunne ikke koble til http://bambooinvoice.org.";
$lang['utilities_version_check'] = "Ny versjon-sjekk";
$lang['utilities_version_undetermined'] = "Version-status kunne ikke hentes.";

$lang['menu_did_you_know_quotes'] = array(
					"BambooINVOICE har forum på forums.bambooinvoice.org for support, ønske om nye funksjoner, og for å chatte.",
					"BambooINVOICE er utgitt under GPL lisensen.",
					"Dine instillinger kan endres når som helst under &ldquo;instillinger&rdquo; i menyen.",
					"Denne hjelpe-filen utvikles daglig. Besøk BambooINVOICE.org for nye oppdateringer!",
					"Du kan legge opp en ny klient fra &ldquo;klienter&rdquo; menyen, eller rett før du legger inn en faktura!",
					"En enkel stamme av bambus fra et etablert rot-system når vanligvis full høyde i løpet av kun ett år!",
					"Bambus-planten&rsquo;s lange liv gjør den til et Kinesisk symbol, og i India er den et symbol for vennskap."
					);
?>