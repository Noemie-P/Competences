<?php

class Manager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }


    public function getSituation($id)
    {
        $id = (int) $id;

	    $q = $this->_db->query('SELECT id_realisation, nom, date_debut, detail, date_creation, duree, duree_type, id_utilisateur FROM Realisation WHERE id_realisation = '.$id);
	    $donnees = $q->fetch(PDO::FETCH_ASSOC);

	    return new Situation($donnees['id_realisation'],$donnees['nom'],$donnees['date_debut'],$donnees['detail'],$donnees['date_creation'],$donnees['duree'],$donnees['duree_type'],$donnees['id_utilisateur']);
	}

    public function addSituation(Situation $situation)
	{
	$q = $this->_db->prepare('INSERT INTO Realisation(nom, date_debut, detail, date_creation, duree, duree_type, id_utilisateur) VALUES( :nom, :date_debut, :detail, :date_creation, :duree, :duree_type, :id_utilisateur)');

	//$q->bindValue(':id', $situation->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $situation->getnom());
	$q->bindValue(':date_debut', $situation->getdate_debut());
	$q->bindValue(':detail', $situation->getdetails());
	$q->bindValue(':date_creation', $situation->getdate_creation());
	$q->bindValue(':duree', $situation->getduree());
	$q->bindValue(':duree_type', $situation->gettype_duree());
	$q->bindValue(':id_utilisateur', $situation->getId_user());

	$q->execute();
    }

    public function getListSituation($id_user)
	{
	$situation = [];
	
	$q = $this->_db->query('SELECT id_realisation, nom, date_debut, detail, date_creation, duree, duree_type, id_utilisateur FROM Realisation WHERE id_utilisateur ='. $id_user.' ORDER BY date_debut');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $situation[] = new Situation($donnees['id_realisation'], $donnees['nom'],$donnees['date_debut'],$donnees['detail'],$donnees['date_creation'],$donnees['duree'],$donnees['duree_type'],$donnees['id_utilisateur']);
	  
	}

	return $situation;
	}

	/*public function addActivite(Activite $activite)
	{
	$q = $this->_db->prepare('INSERT INTO Activite(id_activite, nom) VALUES(:id_activite, :nom,)');

	$q->bindValue(':id', $activite->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $activite->getnom());

	$q->execute();
    }*/

	public function getListActivite()
	{
	$activite = [];
	
	$q = $this->_db->query('SELECT id_activite, identifiant, nom FROM Activite ORDER BY identifiant');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $activite[] = new Activite($donnees['id_activite'],$donnees['identifiant'], $donnees['nom']);
	  
	}
	return $activite;

	}

	public function getListActiviteFromBloc(int $id_bloc)
	{
	$activite = [];
	
	$q = $this->_db->query('SELECT id_activite, identifiant, nom FROM Activite  WHERE id_bloc ='. $id_bloc .' ORDER BY identifiant');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $activite[] = new Activite($donnees['id_activite'],$donnees['identifiant'], $donnees['nom']);
	  
	}
	return $activite;

	}
	/*public function addBloc(Bloc $bloc)
	{
	$q = $this->_db->prepare('INSERT INTO Bloc(id_bloc, nom) VALUES(:id_bloc, :nom)');

	$q->bindValue(':id', $bloc->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $bloc->getnom());


	$q->execute();
    }*/

	public function getListBloc()
	{
	$bloc = [];
	
	$q = $this->_db->query('SELECT id_bloc, identifiant, nom FROM Bloc ORDER BY identifiant');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $bloc[] = new Bloc($donnees['id_bloc'],$donnees['identifiant'], $donnees['nom']);
	  
	}
	return $bloc;
	}

	/*public function addCompetence(Competences $competence)
	{
	$q = $this->_db->prepare('INSERT INTO Competences(id_competence, nom, detail) VALUES(:id_competence, :nom, :detail)');

	$q->bindValue(':id', $competence->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $competence->getnom());
	$q->bindValue(':detail', $competence->getdetail());


	$q->execute();
	}*/

	public function getListCompetence()
	{
	$competence = [];
	
	$q = $this->_db->query('SELECT id_competence, identifiant, nom FROM Competence ORDER BY identifiant');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $competence[] = new Competences($donnees['id_competence'],$donnees['identifiant'], $donnees['nom']);
	  
	}
	return $competence;
	}

	public function getListCompetenceFromActivite($id_activite)
	{
	$competence = [];
	
	$q = $this->_db->query('SELECT id_competence, identifiant, nom FROM Competence WHERE id_activite ='. $id_activite .' ORDER BY identifiant ');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $competence[] = new Competences($donnees['id_competence'],$donnees['identifiant'], $donnees['nom']);
	  
	}

	return $competence;
	}

	public function addContexte(Contexte $contexte)
	{
	$q = $this->_db->prepare('INSERT INTO Contexte(id_contexte, contexte) VALUES(:id_contexte, :contexte)');

	$q->bindValue(':id_contexte', $contexte->getid(), PDO::PARAM_INT);
	$q->bindValue(':contexte', $contexte->getcontexte());


	$q->execute();
	}

	public function addLien(Lien $lien)
	{
	$q = $this->_db->prepare('INSERT INTO Source(id_source, URI, detail, id_realisation) VALUES(:id_source, :URI, :detail, :id_realisation)');

	$q->bindValue(':id_source', $lien->getid_liens(), PDO::PARAM_INT);
	$q->bindValue(':URI', $lien->getURI());
	$q->bindValue(':detail', $lien->getdetail());
	$q->bindValue(':id_realisation', $lien->getid_realisation());

	$q->execute();
	}

	public function getUtilisateur($id)
    {
        $id = (int) $id;

	    $q = $this->_db->query('SELECT id_utilisateur, identifiant, nom, prenom, mdp, type_compte, page FROM Utilisateur WHERE id_utilisateur = '.$id);
	    $donnees = $q->fetch(PDO::FETCH_ASSOC);

	    return new Utilisateur($donnees['id_utilisateur'],$donnees['identifiant'],$donnees['nom'],$donnees['prenom'],$donnees['mdp'],$donnees['type_compte'],$donnees['page']);
	}

	public function getUtilisateurFromIdentifiant($identifiant)
    {
        $identifiant = (string) $identifiant;

	    $q = $this->_db->query('SELECT id_utilisateur, identifiant, nom, prenom, mdp, type_compte, page FROM Utilisateur WHERE identifiant = "'.$identifiant.'"');
	    $donnees = $q->fetch(PDO::FETCH_ASSOC);

	    return new Utilisateur($donnees['id_utilisateur'],$donnees['identifiant'],$donnees['nom'],$donnees['prenom'],$donnees['mdp'],$donnees['type_compte'],$donnees['page']);
	}

	public function addUtilisateur(Utilisateur $utilisateur)
	{
	$q = $this->_db->prepare('INSERT INTO Utilisateur(identifiant, nom, prenom, mdp, type_compte, page) VALUES(:id_EGNOM, :nom, :prenom, :mdp, :type_de_compte, :page)');

	$q->bindValue(':identifiant', $utilisateur->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $utilisateur->getnom());
	$q->bindValue(':prenom', $utilisateur->getprenom());
	$q->bindValue(':mdp', $utilisateur->getmdp());
	$q->bindValue(':type_compte', $utilisateur->gettype_de_compte());
	$q->bindValue(':page', $utilisateur->getpage());

	$q->execute();
	}

	public function updateUtilisateur($id_user, $password)
	{
	$q = $this->_db->prepare('UPDATE Utilisateur set mdp=:mdp WHERE id_utilisateur = :id_utilisateur');

	$q->bindValue(':mdp', $password);
	$q->bindValue(':id_utilisateur', $id_user);

	$q->execute();
	}

	public function updatePageUtilisateur($id_user, $page)
	{
	$q = $this->_db->prepare('UPDATE Utilisateur set page=:page WHERE id_utilisateur = :id_utilisateur');

	$q->bindValue(':page', $page);
	$q->bindValue(':id_utilisateur', $id_user);

	$q->execute();
	}

	public function getListCollaborateurs()
	{
	$user = [];
	
	$q = $this->_db->query('SELECT id_utilisateur, identifiant, nom, prenom, mdp, type_compte, page FROM Utilisateur WHERE type_compte = "collaborateur" ORDER BY identifiant');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $user[] = new Utilisateur($donnees['id_utilisateur'], $donnees['identifiant'], $donnees['nom'],$donnees['prenom'],$donnees['mdp'], $donnees['type_compte'],$donnees['page'], );
	  
	}

	return $user;
	}

	public function addCompetence_visee(Competence_visee $competenceVisee)
	{
	$q = $this->_db->prepare('INSERT INTO Competence_visee(id_competence_visee, detail, id_realisation, id_competence) VALUES(:id_competence, :detail, :id_realisation, :id_competence)');

	$q->bindValue(':id_competence_visee', $competenceVisee->getid_competence_visee(), PDO::PARAM_INT);
	$q->bindValue(':detail', $competenceVisee->getdetail());
	$q->bindValue(':id_realisation', $competenceVisee->getid_realisation());
	$q->bindValue(':id_competence', $competenceVisee->getid_competence());

	$q->execute();
	}

	public function countSituationOfCompetence($id_utilisateur, $id_competence) 
	{
		$id_utilisateur = (int) $id_utilisateur;
		$id_competence = (int) $id_competence;

	    $q = $this->_db->query('SELECT Competence_visee.id_realisation, COUNT(*) OVER() AS TableCount FROM Competence_visee
		JOIN realisation ON Competence_visee.id_realisation = Realisation.id_realisation 
		WHERE Realisation.id_utilisateur = '.$id_utilisateur.' AND Competence_visee.id_competence = '.$id_competence);
	    $donnees = $q->fetch(PDO::FETCH_ASSOC);

		return $donnees['TableCount'] ?? 0;
	    
	}

	public function setDb(pdo $db)
    { 
        $this->_db=$db;
    }

	public function deleteSituation(Situation $situation)
	{
		$this->_db->exec('DELETE FROM Realisation WHERE id_realisation = '.$situation->getid());
    }

	public function deleteSourceOfSituation(Situation $situation)
	{
		$this->_db->exec('DELETE FROM Source WHERE id_realisation = '.$situation->getid());
    }
	public function deleteCompetenceViseeOfSituation(Situation $situation)
	{
		$this->_db->exec('DELETE FROM Competence_visee WHERE id_realisation = '.$situation->getid());
    }






























}
