<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domēns',
    'ad_domain_help'			=> 'Tas dažreiz ir tāds pats kā jūsu e-pasta domēnam, bet ne vienmēr.',
    'admin_cc_email'            => 'E-pasta kopija',
    'admin_cc_email_help'       => 'Šeit ievadiet epasta adresi, ja vēlaties saņemt kopiju epastiem par izsniegšanu / saņemšanu, kuras sūta lietotājiem. Atstājiet tukšu, ja nevēlaties kopijas.',
    'is_ad'				        => 'Tas ir Active Directory serveris',
	'alert_email'				=> 'Sūtīt brīdinājumus uz',
	'alerts_enabled'			=> 'Brīdinājumi ir iespējoti',
	'alert_interval'			=> 'Pabeidzamo brīdinājumu slieksnis (dienās)',
	'alert_inv_threshold'		=> 'Inventāra trauksmes slieksnis',
	'asset_ids'					=> 'Aktīvu ID',
	'audit_interval'            => 'Audita intervāls',
    'audit_interval_help'       => 'Ja jums ir pienākums regulāri fiziski pārbaudīt savus aktīvus, ievadiet intervālu mēnešos.',
	'audit_warning_days'        => 'Revīzijas brīdinājuma slieksnis',
    'audit_warning_days_help'   => 'Cik dienas iepriekš mēs brīdinātu jūs, kad aktīvi ir jāmaksā par revīziju?',
	'auto_increment_assets'		=> 'Veidojiet automātisko pieaugošo līdzekļu ID',
	'auto_increment_prefix'		=> 'Prefikss (pēc izvēles)',
	'auto_incrementing_help'    => 'Vispirms, lai to iestatītu, iespējojiet automātisko pieaugošo līdzekļu ID',
	'backups'					=> 'Rezerves kopijas',
	'barcode_settings'			=> 'Svītru kodu iestatījumi',
    'confirm_purge'			    => 'Apstipriniet iztīrīšanu',
    'confirm_purge_help'		=> 'Ievadiet tekstu "DELETE" zemāk esošajā lodziņā, lai dzēstu savus dzēstos ierakstus. Šo darbību nevar atsaukt.',
	'custom_css'				=> 'Pielāgota CSS',
	'custom_css_help'			=> 'Ievadiet jebkuru pielāgotu CSS ignorēšanu, kuru vēlaties izmantot. Neiekļaujiet &lt;style&gt;&lt;/style&gt; atzīmes.',
    'custom_forgot_pass_url'	=> 'Pielāgotā paroles atjaunošanas saite',
    'custom_forgot_pass_url_help'	=> 'Tas aizstāj pieteikšanās ekrānā iebūvēto aizmirstās paroles URL. To izmanto, lai novirzītu cilvēkus uz iekšējā vai ārēja LDAP servera paroles atiestatīšanas funkcionalitāti. Tas efektīvi atspējos lokālā lietotājā paroles atiestatīšanas funkcionalitāti.',
    'dashboard_message'			=> 'Paziņojumu Galvenajā Panelī',
    'dashboard_message_help'	=> 'Šis teksts parādīsies ikvienam, kuram ir atļauja, skatīt Galveno paneli.',
	'default_currency'  		=> 'Valūta pēc noklusējuma',
	'default_eula_text'			=> 'Noklusējuma EULA',
  'default_language'			=> 'Noklusējuma valoda',
	'default_eula_help_text'	=> 'Varat arī saistīt pielāgotās EULA ar noteiktām aktīvu kategorijām.',
    'display_asset_name'        => 'Displeja aktīvu nosaukums',
    'display_checkout_date'     => 'Displeja norēķinu datums',
    'display_eol'               => 'Displejs EOL tabulas skatījumā',
    'display_qr'                => 'Displeja kvadrātveida kodi',
	'display_alt_barcode'		=> 'Parādiet 1D svītrkodu',
	'barcode_type'				=> '2D svītru kodu tips',
	'alt_barcode_type'			=> '1D svītrkoda tips',
    'eula_settings'				=> 'EULA iestatījumi',
    'eula_markdown'				=> 'Šis EULA ļauj <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromatizēts markdown</a>.',
    'footer_text'               => 'Papildu kājenes teksts ',
    'footer_text_help'          => 'Šis teksts tiks parādīts labajā kājenē. Saites ir atļautas, izmantojot <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Līniju pārtraukumi, galvenes, attēli, utt. var radīt neparedzamus rezultātus.',
    'general_settings'			=> 'Vispārīgie iestatījumi',
	'generate_backup'			=> 'Izveidot dublējumu',
    'header_color'              => 'Galvenes krāsa',
    'info'                      => 'Šie iestatījumi ļauj jums pielāgot noteiktus instalēšanas aspektus.',
    'laravel'                   => 'Laravel versija',
    'ldap_enabled'              => 'LDAP iespējota',
    'ldap_integration'          => 'LDAP integrācija',
    'ldap_settings'             => 'LDAP iestatījumi',
    'ldap_login_test_help'      => 'Ievadiet derīgu LDAP lietotājvārdu un paroli no iepriekš norādītā pamata DN, lai pārbaudītu, vai LDAP lietotājvārds ir konfigurēts pareizi. VISPIRMS SAGLABĀJIET ATJAUNINĀTOS LDAP IESTATĪJUMUS.',
    'ldap_login_sync_help'      => 'Šis tikai pārbauda vai darbojas LDAP sinhronizācija. Ja LDAP autentifikācijas vaicājums nav pareizs, lietotāji, iespējams, joprojām nevarēs pierakstīties. VISPIRMS SAGLABĀJIET ATJAUNINĀTOS LDAP IESTATĪJUMUS.',
    'ldap_server'               => 'LDAP serveris',
    'ldap_server_help'          => 'Tam vajadzētu sākt ar ldap: // (nešifrētiem vai TLS) vai ldaps: // (attiecībā uz SSL)',
	'ldap_server_cert'			=> 'LDAP SSL sertifikātu validācija',
	'ldap_server_cert_ignore'	=> 'Atļaut nederīgu SSL sertifikātu',
	'ldap_server_cert_help'		=> 'Atzīmējiet šo izvēles rūtiņu, ja izmantojat pašrakstītu SSL sertifikātu un vēlaties pieņemt nederīgu SSL sertifikātu.',
    'ldap_tls'                  => 'Izmantojiet TLS',
    'ldap_tls_help'             => 'To vajadzētu pārbaudīt tikai tad, ja jūsu LDAP serverī izmantojat STARTTLS.',
    'ldap_uname'                => 'LDAP Bind Lietotājvārds',
    'ldap_pword'                => 'LDAP Bind Parole',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP filtrs',
    'ldap_pw_sync'              => 'LDAP paroles sinhronizācija',
    'ldap_pw_sync_help'         => 'Noņemiet atzīmi no šīs izvēles rūtiņas, ja nevēlaties, lai LDAP paroles tiktu sinhronizētas ar vietējām parolēm. Atspējojot to, tas nozīmē, ka jūsu lietotāji, iespējams, nevarēs pieteikties, ja jūsu LDAP serveris kāda iemesla dēļ nav sasniedzams.',
    'ldap_username_field'       => 'Lietotājvārds lauks',
    'ldap_lname_field'          => 'Uzvārds',
    'ldap_fname_field'          => 'LDAP vārds',
    'ldap_auth_filter_query'    => 'LDAP autentifikācijas vaicājums',
    'ldap_version'              => 'LDAP versija',
    'ldap_active_flag'          => 'LDAP aktīvā karodziņa',
    'ldap_emp_num'              => 'LDAP darbinieku skaits',
    'ldap_email'                => 'LDAP e-pasts',
    'license'                  => 'Programmatūras licence',
    'load_remote_text'          => 'Attàlie skripti',
    'load_remote_help_text'		=> 'Šī Snipe-IT instalēšana var ielādēt skriptus no ārpasaules.',
    'login_note'                => 'Pieteikšanās piezīme',
    'login_note_help'           => 'Jūsu pieteikšanās ekrānā pēc izvēles var iekļaut dažus teikumus, piemēram, lai palīdzētu cilvēkiem, kuri ir atraduši nozaudētu vai nozagtu ierīci. Šajā laukā tiek pieņemti <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromatizēti atzīme</a>',
    'login_remote_user_text'    => 'Attālā lietotāja pieslēgšanās iespējas',
    'login_remote_user_enabled_text' => 'Iespējot pieslēgšanos ar attālā lietotāja galveni',
    'login_remote_user_enabled_help' => 'Šī opcija iespējo autentifikāciju, izmantojot REMOTE_USER galveni atbilstoši “Common Gateway Interface (rfc3875)” protokolam',
    'login_common_disabled_text' => 'Atspējot citus autentifikācijas mehānismus',
    'login_common_disabled_help' => 'Šī opcija atspējo citus autentifikācijas mehānismus. Iespējojiet šo opciju tikai tad, ja esat pārliecināts, ka jūsu REMOTE_USER pierakstīšanās jau darbojas',
    'login_remote_user_custom_logout_url_text' => 'Pielāgota izrakstīšanās saite',
    'login_remote_user_custom_logout_url_help' => 'Ja šeit ir norādīts URL, lietotāji tiks novirzīti uz šo URL pēc tam, kad lietotājs izrakstīsies no Snipe-IT. Tas ir noderīgi, lai pareizi aizvērtu lietotāja sesijas no jūsu lietotāju autentifikāciju nodrošinātāja.',
    'logo'                    	=> 'Logotips',
    'logo_print_assets'         => 'Izmantot drukāšanā',
    'logo_print_assets_help'    => 'Izmantot zīmolradi drukātos līdzekļu sarakstos ',
    'full_multiple_companies_support_help_text' => 'Ierobežot lietotājus (tostarp administratorus), kas uzņēmumiem piešķirti viņu uzņēmuma aktīvos.',
    'full_multiple_companies_support_text' => 'Pilns vairāku uzņēmumu atbalsts',
    'show_in_model_list'   => 'Rādīt iekš DropDown modeļa',
    'optional'					=> 'pēc izvēles',
    'per_page'                  => 'Rezultāti lapā',
    'php'                       => 'PHP versija',
    'php_gd_info'               => 'Jums jāinstalē php-gd, lai parādītu QR kodus, skatiet instalēšanas instrukcijas.',
    'php_gd_warning'            => 'PHP attēlu apstrāde un GD spraudnis nav instalēts.',
    'pwd_secure_complexity'     => 'Paroles sarežģītība',
    'pwd_secure_complexity_help' => 'Izvēlieties, kuru paroles sarežģītības noteikumus vēlaties izpildīt.',
    'pwd_secure_min'            => 'Paroles minimums rakstzīmes',
    'pwd_secure_min_help'       => 'Minimālā pieļaujamā vērtība ir 5',
    'pwd_secure_uncommon'       => 'Novērst parastās paroles',
    'pwd_secure_uncommon_help'  => 'Tas nepieļaus lietotājiem izmantot parastās paroles no lielākajām 10 000 paroļu, par kurām ziņots pārkāpumos.',
    'qr_help'                   => 'Iespējojiet QR kodus vispirms, lai to iestatītu',
    'qr_text'                   => 'QR kodu tekstu',
    'setting'                   => 'Iestatījums',
    'settings'                  => 'Iestatījumi',
    'show_alerts_in_menu'       => 'Rādīt brīdinājumus augšējā izvēlnē',
    'show_archived_in_list'     => 'Arhivētie aktīvi',
    'show_archived_in_list_text'     => 'Parādīt arhivētos līdzekļus "Visi aktīvi" sarakstā',
    'show_images_in_email'     => 'Rādīt attēlus e-pastā',
    'show_images_in_email_help'   => 'Noņemiet atzīmi no šīs izvēles rūtiņas, ja jūsu Snipe-IT instalācija atrodas aiz VPN vai slēgta tīkla un lietotāji ārpus tīkla savā e-pasta ziņojumā nevarēs ielādēt attēlus, kas tiek rādīti no šīs instalācijas.',
    'site_name'                 => 'Vietnes nosaukums',
    'slack_botname'             => 'Vāja Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Vāja integrācija nav obligāta, taču galapunkts un kanāls ir vajadzīgi, ja vēlaties to izmantot. Lai konfigurētu Slack integrāciju, vispirms <a href=":slack_link" target="_new">izveidojiet ienākošo webhook</a> savā Slack kontā.',
    'slack_integration_help_button'    => 'Pārbaudes poga parādīsies, tiklīdz būs saglabāta Slack informācija.',
    'slack_test_help'           => 'Pārbaudīt, vai Slack iekļaušana ir uzstādīta pareizi. ATJAUNINĀTAJIEM SLACK UZSTĀDĪJUMIEM PIRMS TAM IR JĀBŪT SAGLABĀTIEM.',
    'snipe_version'  			=> 'Snipe-IT versija',
    'support_footer'            => 'Atbalsta kājenes saites ',
    'support_footer_help'       => 'Norādiet, kurš redz saites uz Snipe-IT atbalsta informāciju un lietotāju rokasgrāmatu.',
    'version_footer'            => 'Versija kājenē ',
    'version_footer_help'       => 'Norādiet, kurš redz Snail-IT versiju un versijas numuru.',
    'system'                    => 'Sistēmas informācija',
    'update'                    => 'Atjauniniet iestatījumus',
    'value'                     => 'Vērtība',
    'brand'                     => 'Brendings',
    'about_settings_title'      => 'Par iestatījumiem',
    'about_settings_text'       => 'Šie iestatījumi ļauj jums pielāgot noteiktus instalēšanas aspektus.',
    'labels_per_page'           => 'Iezīmes uz lapas',
    'label_dimensions'          => 'Etiķetes izmēri (collas)',
    'next_auto_tag_base'        => 'Nākamais automātiskais pieaugums',
    'page_padding'              => 'Lappuse (collas)',
    'privacy_policy_link'       => 'Saite uz konfidencialitātes politiku',
    'privacy_policy'            => 'Privātuma politika',
    'privacy_policy_link_help'  => 'Ja šeit ir iekļauts vietrādis URL, saite uz jūsu konfidencialitātes politiku tiks iekļauta lietotnes kājenē un jebkuros e-pasta ziņojumos, ko sistēma nosūta atbilstoši GDPR. ',
    'purge'                     => 'Iztīrīt dzēstos ierakstus',
    'labels_display_bgutter'    => 'Uzlīmes apakšējā notekcaurule',
    'labels_display_sgutter'    => 'Uzlīmes sānu notekas',
    'labels_fontsize'           => 'Etiķetes fonta izmērs',
    'labels_pagewidth'          => 'Etiķetes lapas platums',
    'labels_pageheight'         => 'Etiķetes lapas augstums',
    'label_gutters'        => 'Etiķetes atstarpes (collas)',
    'page_dimensions'        => 'Lapas izmēri (collas)',
    'label_fields'          => 'Iezīmējiet redzamus laukus',
    'inches'        => 'collas',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Saite uz Snipe-IT e-pasta ziņojumos',
    'show_url_in_emails_help_text'      => 'Noņemiet atzīmi no šīs izvēles rūtiņas, ja nevēlaties savā e-pasta kājenēs atvērt saiti uz savu Snipe-IT instalāciju. Noderīgi, ja lielākā daļa jūsu lietotāju nekad neiesakās.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maksimālais sīktēlu augstums',
    'thumbnail_max_h_help'   => 'Maksimālais augstums pikseļos, kad saraksta skatījumā var tikt rādīti sīktēli. Min 25, max 500.',
    'two_factor'        => 'Divu faktoru autentifikācija',
    'two_factor_secret'        => 'Divu koeficientu kods',
    'two_factor_enrollment'        => 'Divu faktoru uzņemšana',
    'two_factor_enabled_text'        => 'Iespējot divus faktorus',
    'two_factor_reset'        => 'Atiestatīt divfaktora noslēpumu',
    'two_factor_reset_help'        => 'Tas liks lietotājam vēlreiz reģistrēt savu ierīci, izmantojot Google autentifikatoru. Tas var būt noderīgi, ja to pašreizējā reģistrētā ierīce tiek nozaudēta vai nozagta.',
    'two_factor_reset_success'          => 'Divu faktoru ierīce ir veiksmīgi atiestatīta',
    'two_factor_reset_error'          => 'Divu faktoru ierīces atiestatīšana neizdevās',
    'two_factor_enabled_warning'        => 'Iespējojot divu faktoru darbību, ja tas pašlaik nav iespējots, jūs nekavējoties piespiedīs autentificēt ar Google Auth reģistrēto ierīci. Jums būs iespēja ierakstīt savu ierīci, ja tā pašlaik nav reģistrēta.',
    'two_factor_enabled_help'        => 'Izmantojot Google autentifikatoru, tiks aktivizēts divu faktoru autentifikācija.',
    'two_factor_optional'        => 'Selektīvā (lietotāji var iespējot vai atspējot, ja tas ir atļauts)',
    'two_factor_required'        => 'Nepieciešams visiem lietotājiem',
    'two_factor_disabled'        => 'Invalīds',
    'two_factor_enter_code'	=> 'Ievadiet divu faktoru kodu',
    'two_factor_config_complete'	=> 'Iesniegt kodu',
    'two_factor_enabled_edit_not_allowed' => 'Jūsu administrators neatļauj mainīt šo iestatījumu.',
    'two_factor_enrollment_text'	=> "Nepieciešama divu faktoru autentifikācija, tomēr jūsu ierīce vēl nav reģistrēta. Atveriet savu lietotni Google autentifikators un skenējiet zemāk redzamo QR kodu, lai reģistrētu savu ierīci. Kad esat reģistrējies savā ierīcē, ievadiet zemāk redzamo kodu",
    'require_accept_signature'      => 'Pieprasīt parakstu',
    'require_accept_signature_help_text'      => 'Iespējojot šo funkciju, lietotājiem būs jāpiesaista aktīva pieņemšana.',
    'left'        => 'pa kreisi',
    'right'        => 'pa labi',
    'top'        => 'tops',
    'bottom'        => 'apakšā',
    'vertical'        => 'vertikāla',
    'horizontal'        => 'horizontāli',
    'unique_serial'                => 'Unikālie sērijas numuri',
    'unique_serial_help_text'                => 'Atzīmējot šo lodziņu, tas padarīs Aktīvu/inventāra sērijas nummurus unikālus',
    'zerofill_count'        => 'Aktīvu biržas garums, ieskaitot zerofill',
);
