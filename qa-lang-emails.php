<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	Copyright (C) 2014 Sander Lepik
	
	File: qa-lang/et/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Sinu vastus keskkonnas \"^site_title\" sai kasutajalt ^c_handle uue kommentaari:\n\n^open^c_content^close\n\nSinu vastuseks oli:\n\n^open^c_context^close\n\nVastamiseks võid lisada kommentaari järgmisel lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'a_commented_subject' => '^site_title: sinu vastusele lisati uus kommentaar',

		'a_followed_body' => "Kasutaja ^q_handle esitas keskkonnas \"^site_title\" sinu vastusega seoses uue küsimuse:\n\n^open^q_title^close\n\nSinu vastuseks oli:\n\n^open^a_content^close\n\nUuele küsimusele vastamiseks klõpsa järgneval lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'a_followed_subject' => '^site_title: sinu vastusega seoses esitati uus küsimus',

		'a_selected_body' => "Õnnitlused! Kasutaja ^s_handle valis keskonnas \"^site_title\" sinu vastuse parimaks:\n\n^open^a_content^close\n\nKüsimuseks oli:\n\n^open^q_title^close\n\nOma vastuse nägemiseks klõpsa järgneval lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'a_selected_subject' => '^site_title: sinu vastus valiti parimaks!',

		'c_commented_body' => "Kasutaja ^c_handle lisas keskkonnas \"^site_title\" sinu kommentaari järele uue kommentaari:\n\n^open^c_content^close\n\nArutelu teema:\n\n^open^c_context^close\n\nKommentaariga vastamiseks klõpsa järgneval lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'c_commented_subject' => '^site_title: sinu kommentaari järele lisati uus kommentaar',

		'confirm_body' => "Et kinnitada oma e-posti aadress keskkonnas \"^site_title\", klõpsa järgneval lingil:\n\n^url\n\nTäname,\n^site_title",
		'confirm_subject' => '^site_title: e-posti aadressi kinnitamine',

		'feedback_body' => "Kommentaarid:\n^message\n\nNimi:\n^name\n\nE-posti aadress:\n^email\n\nEelmine külastatud leht:\n^previous\n\nKasutaja:\n^url\n\nIP-aadress:\n^ip\n\nBrauser:\n^browser",
		'feedback_subject' => '^: tagasiside',

		'flagged_body' => "Kasutaja ^p_handle postitusele on lisatud ^flags:\n\n^open^p_context^close\n\nPostituse vaatamiseks klõpsa järgneval lingil:\n\n^url\n\n\nKõigi märgistatud postituste nägemiseks klõpsa alloleval lingil:\n\n^a_url\n\n\nTäname,\n\n^site_title",
		'flagged_subject' => '^site_title: teavitati postitusest',

		'moderate_body' => "Kasutaja ^p_handle postitus vajab heakskiitu:\n\n^open^p_context^close\n\nPostituse heakskiitmiseks või tagasilükkamiseks klõpsa järgneval lingil:\n\n^url\n\n\nKõigi heakskiitu ootavate postituste nägemiseks klõpsa alloleval lingil:\n\n^a_url\n\n\nTäname,\n\n^site_title",
		'moderate_subject' => '^site_title: modereerimine',

		'new_password_body' => "Uue parooli keskkonna \"^site_title\" jaoks leiad altpoolt.\n\nParool: ^password\n\nOn tungivalt soovitatav, et muudaksid selle parooli kohe pärast sisselogimist.\n\nTäname,\n^site_title\n^url",
		'new_password_subject' => '^site_title: uus parool',

		'private_message_body' => "Kasutaja ^f_handle saatis sulle keskkonnas \"^site_title\" uue privaatsõnumi:\n\n^open^message^close\n\n^moreTäname,\n\n^site_title\n\n\nPrivaatsõnumite blokeerimiseks külasta oma konto lehte järgneval lingil:\n^a_url",
		'private_message_info' => "Rohkem infot kasutaja ^f_handle kohta:\n\n^url\n\n",
		'private_message_reply' => "Kasutajale ^f_handle privaatsõnumiga vastamiseks klõpsa järgneval lingil:\n\n^url\n\n",
		'private_message_subject' => '^site_title: privaatsõnum kasutajalt ^f_handle',

		'q_answered_body' => "Kasutaja ^a_handle vastas keskkonnas \"^site_title\" sinu küsimusele:\n\n^open^a_content^close\n\nSinu küsimuseks oli:\n\n^open^q_title^close\n\nKui see küsimus meeldib sulle, siis võid selle valida parimaks:\n\n^url\n\nTäname,\n\n^site_title",
		'q_answered_subject' => '^site_title: sinu küsimusele vastati',

		'q_commented_body' => "Kasutaja ^c_handle lisas keskkonnas \"^site_title\" sinu küsimusele uue kommentaari:\n\n^open^c_content^close\n\nSinu küsimuseks oli:\n\n^open^c_context^close\n\nSa võid kommentaarile oma kommentaariga vastata:\n\n^url\n\nTäname,\n\n^site_title",
		'q_commented_subject' => '^site_title: sinu küsimusele lisati kommentaar',

		'q_posted_body' => "Kasutaja ^q_handle esitas uue küsimuse:\n\n^open^q_title\n\n^q_content^close\n\nKüsimuse vaatamiseks klõpsa järgneval lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'q_posted_subject' => '^site_title: esitati uus küsimus',
		
		'remoderate_body' => "Kasutaja ^p_handle muudetud postitus vajab heakskiitu:\n\n^open^p_context^close\n\nPostituse heakskiitmiseks või peitmiseks klõpsa järgneval lingil:\n\n^url\n\n\nKõigi heakskiitu vajavate postituste vaatamiseks klõpsa alloleval lingil:\n\n^a_url\n\n\nTäname,\n\n^site_title",
		'remoderate_subject' => '^site_title: modereerimine',

		'reset_body' => "Keskkonna \"^site_title\" parooli lähtestamiseks klõpsa järgneval lingil:\n\n^url\n\nAlternatiivina võid sisestada alloleva koodi vastavasse vormi välja.\n\nKood: ^code\n\nKui sa ei soovinud parooli lähtestamist, siis ignoreeri seda kirja.\n\nTäname,\n^site_title",
		'reset_subject' => '^site_title: unustatud parooli lähtestamine',

		'to_handle_prefix' => "Tere, ^!\n\n",
		
		'u_registered_body' => "Registreerus uus kasutaja: ^u_handle.\n\nKasutaja profiili vaatamiseks klõpsa järgneval lingil:\n\n^url\n\nTäname,\n\n^site_title",
		'u_to_approve_body' => "Registreerus uus kasutaja: ^u_handle.\n\nKasutaja heakskiitmiseks klõpsa järgneval lingil:\n\n^url\n\nKõigi ootel olevate kasutajate vaatamiseks klõpsa alloleval lingil:\n\n^a_url\n\nTäname,\n\n^site_title",
		'u_registered_subject' => '^site_title: registreerus uus kasutaja',
		
		'u_approved_body' => "Võid oma uut profiili vaadata siit:\n\n^url\n\nTäname,\n\n^site_title",
		'u_approved_subject' => '^site_title: sinu kasutaja sai heakskiidu',
		
		'wall_post_subject' => '^site_title: postitati seinale',
		'wall_post_body' => "Kasutaja ^f_handle postitas keskkonnas \"^site_title\" sinu kasutaja seinale:\n\n^open^post^close\n\nVõid postitusele vastata järgneva lingi kaudu:\n\n^url\n\nTäname,\n\n^site_title",

		'welcome_body' => "Täname, et registreerusid keskkonnas \"^site_title\".\n\n^custom^confirmSinu andmed on järgmised:\n\nE-posti aadress: ^email\n\nTäname,\n\n^site_title\n^url",
		'welcome_confirm' => "E-posti aadressi kinnitamiseks klõpsa järgneval lingil:\n\n^url\n\n",
		'welcome_subject' => 'Tere tulemast keskkonda "^site_title"!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/