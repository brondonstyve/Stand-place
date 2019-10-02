<?php


//|Les routes de mon site

Route::get('/contact', 'ContactsController@create')->name('contact_path');

Route::post('/contact.blade.php','ContactsController@store')->name('contacter_path');

Route::get('/A propos', 'PagesController@ouvrirApropos')->name('apropos_path');

Route::get('/evenement', 'PagesController@ouvrirEvenement')->name('evenment_path');

Route::get('/cours de la formation initialle', 'PagesController@ouvrirCoursfc')->name('cour_for_INI_path');

Route::get('/cours de la formation continu', 'PagesController@ouvrirCoursfi')->name('cour_for_cont_path');

Route::get('/cours en ligne', 'PagesController@ouvrirCoursligne')->name('cour_ligne_path');

Route::get('/', 'PagesController@ouvrirIndex')->name('home');

Route::get('profil', 'PagesController@ouvrirConnex')->name('profil_path');

Route::get('/compReg.blade.php', 'controllerCompte@index')->name('compte_path');

Route::post('storeCompte', 'controllerCompte@store')->name('compte_store_path');

Route::post('Matricule', 'controllerCompte@findMatricule')->name('find_matricule_path');

Route::get('signin.blade.php', 'PagesController@signin')->name('signin_path');

Route::get('/compSign.blade.php', 'controllerConnexion@index')->name('sign_in_path');

Route::post('/compSign.blade.php', 'controllerConnexion@show')->name('connex_show');

Route::post('profil', 'controllerCompte@edit')->name('compte_edit_path');

Route::get('/notes.blade.php', 'PagesController@ouvrirNote');

Route::get('/deconnexion.blade.php', 'PagesController@deconnexion')->name('deconnexion_path');

Route::get('/parametre.blade.php', 'PagesController@parametre')->name('parametre_path');

Route::post('/parametre.blade.php', 'controllerCompte@editP')->name('compte_editP_path');

Route::post('/modification_avatar', 'controllerCompte@modifAvatar')->name('avatar_edit_path');

Route::post('/supprimer_avatar', 'controllerCompte@suppAvatar')->name('avatar_supp_path');

Route::get('/blog', 'PagesController@ouvrirBlog')->name('blog_etu_path');

Route::get('vote', 'vote@membreVotes')->name('vote_path');

Route::post('/voteEnvoi', 'vote@voteEnvoi')->name('vote_envoi_path');

Route::get('/emploi.blade.php', 'PagesController@ouvrirEmploi')->name('edt_path');

Route::get('/inbox', 'PagesController@ouvrirInbox')->name('inbox_path');

Route::post('/paiement', 'PaiementController@Paiement')->name('paiement_path');

Route::get('/paiement', 'PaiementController@Paiement_error')->name('paiement_error_path');

Route::post('/valider_paiement', 'PaiementController@validerPaiement')->name('valider_paiement_path');

Route::post('/paiement_suite', 'PaiementController@suite_Paiement')->name('suite_paiement_path');

Route::post('/valider_suite_paiement', 'PaiementController@validerSuitePaiement')->name('valider_suite_paiement_path');

Route::get('emploiDeTemps', 'emploiDeTempsController@genererEDT')->name('generer_edt_path');

Route::get('note', 'noteController@afficherNote')->name('note_path');

Route::post('ajouter_les_notes', 'noteController@remplirNotes')->name('remplir_note_path');

Route::post('insertion_de_notes', 'noteController@insererNotes')->name('inserer_note_path');

Route::get('appelct', 'appelctController@afficher')->name('appel_ct_path');

Route::post('appelct_liste', 'appelctController@remplirAbsence')->name('appel_ct_liste_path');

Route::post('inserer_absence', 'appelctController@insererAbsence')->name('inserer_absence_path');

Route::post('liste_absence', 'appelctController@listerAbsence')->name('liste_absence_path');

Route::get('/discipline', 'disciplineController@Discipline')->name('discipline_path');

Route::post('emploiDeTemps', 'emploiDeTempsController@disponibilite')->name('disponibilite_edt_path');

Route::post('RempliremploiDeTemps', 'emploiDeTempsController@remplir')->name('remplir_emploi_path');

Route::post('sauvegarderEDT', 'emploiDeTempsController@sauvegarder')->name('sauvegarder_edt_path');

route::get('evaluation','evaluationController@evaluation')->name('evaluation_path');

route::post('evaluation_Generation_epreuve','evaluationController@generateur')->name('generer_epreuve_path');

route::post('evaluation_Enregistreur_epreuve','evaluationController@enregistrer')->name('enregistrer_epreuve_path');

route::post('Envoi_epreuve','evaluationController@envoyerEpreuve')->name('Envoyer_epreuve_path');

route::get('supprimer_epreuve','evaluationController@supprimerEpreuve')->name('supprimer_epreuve_path');

route::get('evaluer_classe','evaluationController@evaluerClasse')->name('evaluer_classe_path');

route::post('enregistrer_evaluation','evaluationController@enregistrerEvalution')->name('enregistrer_evaluation_path');

route::get('supprimer_evaluation','evaluationController@supprimerEvaluation')->name('supprimer_evaluation_path');

route::get('modofier_evaluation','evaluationController@modifierEvaluation')->name('modifier_evaluation_path');

route::post('modofier_dure_evaluation','evaluationController@modifierDureEvaluation')->name('modifier_evaluation_dure_path');

route::get('/composer','evaluationController@composer')->name('composition_path');

route::post('/modifierRep','evaluationController@modifier')->name('modifier_reponses_path');

//test

route::get('/test','test@afficher')->name('test_afficher_path');

route::post('/inserer','test@inserer')->name('test_inserer_path');

//ens test
Route::post('/composition','evaluationController@composition')->name('compose_path');

Route::get('/Tout supprimer','evaluationController@supprimerToutEvaluation')->name('supprimer_tout_evaluation_path');

Route::get('/Tout/supprimer/epreuve','evaluationController@supprimerToutEpreuve')->name('supprimer_tout_epreuve_path');


//administration
Route::get('/Administration','adminController@index')->name('accueil_index_path');

//filiere
Route::get('/liste/filiere','filiereController@listeFiliere')->name('liste_filiere_path');

Route::get('/filiere','filiereController@afficherFiliere')->name('afficher_filiere_path');

Route::post('/Enregistrer/filiere','filiereController@enregistrerFiliere')->name('enregistrer_filiere_path');

Route::post('/Supprimer/Filiere','filiereController@supprimerFiliere')->name('supp_filiere_path');

Route::post('/Chercheur/filiere','filiereController@chercheurFiliere')->name('chercher_filiere_path');

Route::post('/Chercheur/filiere/classe','filiereController@chercheurFiliereClasse')->name('chercher_filiere_classe_path');

Route::post('/modifier/Filiere','filiereController@modifierFiliere')->name('modifier_filiere_path');

Route::post('/voir/Filiere','filiereController@voirFiliere')->name('voir_filiere_path');

//classe

Route::get('/toute/classe','classeController@listeTouteClasse')->name('toute_classe_path');

Route::get('/adminstrerclasse','classeController@index')->name('afficher_classe_path');

Route::post('/Enregistrer/classe','classeController@enregistrerclasse')->name('enregistrer_classe_path');

Route::post('/Supprimer/classe','classeController@supprimerClasse')->name('supp_classe_path');

Route::post('/Chercheur/classe','classeController@chercheurclasse')->name('chercher_classe_path');

Route::post('/modifier/classe','classeController@modifierclasse')->name('modifier_classe_path');

Route::post('/voir/classe','classeController@voirclasse')->name('voir_classe_path');

//solvabilité

Route::get('/solvabilité','solvabiliteController@solvabilite')->name('solvabilite_path');

Route::post('/Salaire','solvabiliteController@payerEns')->name('payer_ens_path');

Route::post('/Listesolvabilité','solvabiliteController@listeSolvabilite')->name('liste_solvabilite_path');

Route::post('/totalApayer','solvabiliteController@totalApayer')->name('total_solvabilite_path');

Route::post('/Fixersolvabilité','solvabiliteController@fixer_Solvabilite')->name('Fixer_solvabilite_path');

//Penalite

Route::get('/Pénalités','penaliteController@penalite')->name('penalite_path');

Route::get('/Listepenalite','penaliteController@listePenalite')->name('liste_penalite_path');

Route::post('/Date_de_paiement','solvabiliteController@dateDePaiement')->name('date_penalite_path');

//payer enseignant
Route::post('/pppppppppppp','solvabiliteController@valider_paie')->name('valider_paie');


//etudiants

Route::get('/Gérer_les_étudiants','etudiantController@etudiant')->name('etudiants_path');

Route::post('/Liste_etudiants','etudiantController@listeEtudiant')->name('liste_etudiant_path');

Route::post('/rechercher_etudiants','etudiantController@rechercherEtudiant')->name('rechercher_etudiant_path');

Route::post('/modifier_etudiants','etudiantController@modifierEtudiant')->name('modifier_etudiant_path');

Route::post('/supprimer_etudiants','etudiantController@supprimerEtudiant')->name('supprimer_etudiant_path');

Route::post('/transferer_etudiants','etudiantController@transfererEtudiant')->name('transferer_etudiant_path');

//Matricule

Route::get('/Gérer_les_Matricules','matriculeController@matricule')->name('matricule_path');

Route::post('/Génerer_les_Matricules','matriculeController@generer_matricule')->name('_genere_matricule_path');


//matieres


Route::get('/Gérer_les_matieres','matiereController@matiere')->name('matiere_path');

Route::post('/enregistrer_les_matieres','matiereController@enregistrer_matiere')->name('enregistrer_matiere_path');

Route::post('/liste_des_matieres','matiereController@liste_matiere')->name('liste_matiere_path');

Route::post('/rechercher_matieres','matiereController@rechercher_matiere')->name('rechercher_matiere_path');

Route::post('/modifier_des_matieres','matiereController@modifier_matiere')->name('modifier_matiere_path');

Route::post('/supprimer_matieres','matiereController@supprimer_matiere')->name('supprimer_matiere_path');

//gerer edt

Route::get('/Emploi_de_temps','emploiDeTempsController@Liste_emploi_temps')->name('emploi_admin_path');

Route::post('/sup_EmploiDeTemps','emploiDeTempsController@sup_emploi_temps')->name('sup_admin_path');

//evaluation admin

Route::get('/Programmer_eval','evaluationController@programmer_eval')->name('progrommer_eval_admin_path');

Route::post('/liste_eval','evaluationController@liste_eval')->name('liste_eval_admin_path');

//discipline

Route::get('/liste_discipline','disciplineController@liste_classe')->name('discipline_admin_path');

Route::post('/ajouter_discipline','disciplineController@ajouter_discipline')->name('ajouter_discipline_admin_path');

Route::get('/voir_conseil_discipline','disciplineController@voir_conseil_discipline')->name('voir_conseil_discipline_admin_path');

Route::post('/juger_conseil_discipline','disciplineController@juger_conseil_discipline')->name('juger_conseil_discipline_admin_path');

Route::get('/voir_conseil_discipline_jugé','disciplineController@voir_conseil_discipline_juge')->name('voir_conseil_discipline_juge_admin_path');

Route::post('/caisier_judiaciaire','disciplineController@caisier_judiaciaire')->name('caisier_judiaciaire_admin_path');

Route::post('/liste_d_absence','disciplineController@liste_d_absence')->name('liste_d_absence_path');

//gerer comptes

Route::get('/gestion_des_comptes','ControllerCompte@gerer_compte')->name('gerer_compte_path');

Route::post('/droit_des_comptes','ControllerCompte@droit_des_compte')->name('droit_compte_path');

//vote
Route::post('/lancer_vote','vote@lancerVote')->name('Lancer_vote_path');

Route::post('/lancer_vote_etudiant','vote@lancerVoteEtudiant')->name('Lancer_vote_etudiant_path');


// blog

Route::get('/Blog','blogController@accueiBlog')->name('blog_path');

Route::post('/sujets','blogController@ajouterBlog')->name('ajouterBlog_path');

Route::post('/supp-sujets','blogController@supBlog')->name('sup_Blog_path');

//message

Route::get('/message','messageController@message')->name('message_path');

Route::post('/messageEmail','messageController@rechercherEmail')->name('rechercher_email_path');
