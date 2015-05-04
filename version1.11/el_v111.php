<?php
return array(
/**
 * Sites
 */

	'item:site' => 'Σελίδες',

/**
 * Sessions
 */

	'login' => "Σύνδεση",
	'loginok' => "Έχετε συνδεθεί.",
	'loginerror' => "Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε τα στοιχεία σας και ξαναπροσπαθήστε.",
	'login:empty' => "Το όνομα χρήστη/διεύθυνση ηλ. ταχυδρομείου και ο κωδικός πρόσβασης απαιτούνται.",
	'login:baduser' => "Αδυναμία φόρτωσης του λογαριασμού σας.", 
	'auth:nopams' => "Εσωτερικό πρόβλημα. Καμία μέθοδος πιστοποίησης στοιχείων δεν είναι εγκατεστημένη.",

	'logout' => "Αποσύνδεση",
	'logoutok' => "Αποσυνδεθήκατε.",
	'logouterror' => "Η αποσύνδεση απέτυχε. Παρακαλώ ξαναπροσπαθήστε.",
	'session_expired' => "Η σύνδεσή σας έληξε. Παρακαλώ ξαναφορτώστε τη σελίδα για να συνδεθείτε.",

	'loggedinrequired' => "Πρέπει να συνδεθείτε για να δείτε τη ζητούμενη σελίδα.",
	'adminrequired' => "Πρέπει να είστε διαχειριστής για να δείτε τη ζητούμενη σελίδα.",
	'membershiprequired' => "Πρέπει να είστε μέλος αυτής της ομάδας για να δείτε τη ζητούμενη σελίδα.",
	'limited_access' => "Δεν έχετε το δικαίωμα να δείτε τη ζητούμενη σελίδα.",


/**
 * Errors
 */

	'exception:title' => "Ανεπανόρθωτο Σφάλμα.",
	'exception:contact_admin' => 'Ένα ανεπανόρθωτο σφάλμα έχει συμβεί και καταγραφεί. Επικοινωνήστε με τον διαχειριστή της σελίδας. Πληροφορίες:',

	'actionundefined' => "Η ζητούμενη ενέργεια (%s) δεν έχει οριστεί στο σύστημα.",
	'actionnotfound' => "Το αρχείο ενέργειας (action file) για την %s δεν βρέθηκε.",
	'actionloggedout' => "Συγνώμη, δεν μπορείτε να πραγματοποιήσετε αυτή την ενέργεια όσο είστε απόσυνδεδεμένος.",
	'actionunauthorized' => 'Δεν είστε εξουσιοδοτημένος για να πραγματοποιήσετε αυτή την ενέργεια',
	'ajax:error' => 'Συνέβει ένα απρόσμενο λάθος κατά τη διάρκεια μίας κλήσης AJAX. Μπορεί να χάθηκε η σύνδεση με τον εξυπηρετητή.',
	'ajax:not_is_xhr' => 'Δεν έχετε απευθείας πρόσβαση στις όψεις(views) του AJAX',

	'PluginException:MisconfiguredPlugin' => "Το %s (guid: %s) είναι ένα πρόσθετο με λάθος ρυθμίσεις και έχει απενεργοποιηθεί. Παρακαλώ ψάξτε στο wiki του Elgg για τις πιθανές αιτίες. (http://learn.elgg.org/).",
	'PluginException:CannotStart' => 'Το %s (guid: %s) αδυνατεί να ξεκινήσει και απενεργοποιήθηκε. Αιτία: %s',
	'PluginException:InvalidID' => "Το %s είναι ένα μη έγκυρο αναγνωριστικό (ID) πρόσθετου.", 
	'PluginException:InvalidPath' => "Το %s είναι ένα μη έγκυρο μονοπάτι πρόσθετου.",
	'PluginException:InvalidManifest' => 'Μη έγκυρο αρχείο δήλωσης (manifest) για το πρόσθετο %s', 
	'PluginException:InvalidPlugin' => 'Το %s είναι ένα μη έγκυρο πρόσθετο.',
	'PluginException:InvalidPlugin:Details' => 'Το %s είναι ένα μη έγκυρο πρόσθετο: %s',
	'PluginException:NullInstantiated' => 'Το ElggPlugin δεν μπορεί να αρχικοποιηθεί με την τιμή null. Πρέπει να δώσετε ένα GUID, ένα αναγνωριστικό (ID) πρόσθετου, ή ένα πλήρες μονοπάτι.', 
	'ElggPlugin:MissingID' => 'Το ID του πρόσθετου (guid %s) απουσιάζει',
	'ElggPlugin:NoPluginPackagePackage' => 'Απουσία ElggPluginPackage για το πρόσθετο με ID %s (guid %s)', 
	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Το απαιτούμενο αρχείο "%s" απουσιάζει.',
	'ElggPluginPackage:InvalidPlugin:InvalidId' => 'Ο φάκελος του πρόσθετου πρέπει να μετονομαστεί σε "%s" για να ταιριάζει με το ID του στο αρχείο δήλωσης (manifest).',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Το αρχείο δήλωσης (manifest) περιλαμβάνει ένα μη έγκυρο είδος εξάρτησης "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Το αρχείο δήλωσης (manifest) περιλαμβάνει ένα μη έγκυρο τύπο provides "%s".', 
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Υπάρχει μία μη έγκυρη %s εξάρτηση "%s" στο πρόσθετο %s. Τα πρόσθετα δεν μπορούν να απαιτούν ή να έρχονται σε σύγκρουση με πληροφορία που τα ίδια παρέχουν!', 
	'ElggPlugin:Exception:CannotIncludeFile' => 'Το %s δεν μπορεί να συμπεριληφθεί για το πρόσθετο %s (guid: %s) στο %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Ο φάκελος \"views\" δεν μπορεί να ανοιχτεί για το πρόσθετο %s (guid: %s) στο %s',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Η καταχώρηση γλωσσών για το πρόσθετο %s (guid: %s) στο %s είναι αδύνατη.', 
	'ElggPlugin:Exception:NoID' => 'Το αναγνωριστικό (ID) για το πρόσθετο με guid %s δεν βρέθηκε!', 
	'PluginException:NoPluginName' => "Το όνομα του πρόσθετου δεν μπόρεσε να εντοπιστεί",
	'PluginException:ParserError' => 'Υπήρξε σφάλμα όταν έγινε προσπάθεια να διατρεχτεί το αρχείο δήλωσης (manifest) με την έκδοση %s του API στο πρόσθετο %s',
	'PluginException:NoAvailableParser' => 'Δεν μπόρεσε να βρεθεί κάποιος parser για το αρχείο δήλωσης (manifest) με την έκδοση $s του API στο πρόσθετο %s.', 
	'PluginException:ParserErrorMissingRequiredAttribute' => "Το απαιτούμενο χαρακτηριστικό (tribute) '%s' λείπει από το αρχείο δήλωσης (manifest) για το πρόσθετο %s.", 
	'ElggPlugin:InvalidAndDeactivated' => 'Το %s είναι μη έγκυρο πρόσθετο και έχει απενεργοποιηθεί.',

	'ElggPlugin:Dependencies:Requires' => 'Απαιτεί',
	'ElggPlugin:Dependencies:Suggests' => 'Προτείνει',
	'ElggPlugin:Dependencies:Conflicts' => 'Συγκρούεται/Αντιπαρατίθεται',
	'ElggPlugin:Dependencies:Conflicted' => 'Σε σύγκρουση/αντιπαράθεση',
	'ElggPlugin:Dependencies:Provides' => 'Παρέχει',
	'ElggPlugin:Dependencies:Priority' => 'Προτεραιότητα',

	'ElggPlugin:Dependencies:Elgg' => 'Έκδοση Elgg',
	'ElggPlugin:Dependencies:PhpVersion' => 'Έκδοση PHP',
	'ElggPlugin:Dependencies:PhpExtension' => 'Επέκταση PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'Ρύθμιση PHP ini: %s', 
	'ElggPlugin:Dependencies:Plugin' => 'Πρόσθετο: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Μετά το %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Πριν το %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => 'Το %s δεν είναι εγκατεστημένο',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Λείπει',
	
	'ElggPlugin:Dependencies:ActiveDependent' => 'Υπάρχουν και άλλα πρόσθετα που καταγράφουν το %s ως εξάρτηση. Πρέπει να απενεργοποιήσετε τα ακόλουθα πρόσθετα πριν απενεργοποιήσετε αυτό: %s',

	'ElggMenuBuilder:Trees:NoParents' => 'Βρέθηκαν στοιχεία μενού χωρίς γονείς για να συνδεθούν σε αυτούς',
	'ElggMenuBuilder:Trees:OrphanedChild' => 'Το στοιχείο μενού [%s] βρέθηκε χωρίς γονέα [%s]',
	'ElggMenuBuilder:Trees:DuplicateChild' => 'Βρέθηκε διπλή εγγραφή για το στοιχείο μενού [%s]',


	'RegistrationException:EmptyPassword' => 'Τα πεδία εισαγωγής κωδικού δεν μπορούν να είναι κενά',
	'RegistrationException:PasswordMismatch' => 'Οι κωδικοί πρέπει να είναι ίδιοι',
	'LoginException:BannedUser' => 'Έχετε αποκλειστεί από αυτή την ιστοσελίδα και δεν μπορείτε να συνδεθείτε',
	'LoginException:UsernameFailure' => 'Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε το όνομα χρήστη/διεύθυνση ηλ. ταχδρομείου και τον κωδικό πρόσβασης.',
	'LoginException:PasswordFailure' => 'Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε το όνομα χρήστη/διεύθυνση ηλ. ταχυδρομείου και τον κωδικό πρόσβασης.',
	'LoginException:AccountLocked' => 'Ο λογαριασμός σας κλειδώθηκε λόγω πολλαπλών αποτυχημένων προσπαθειών σύνδεσης.',
	'LoginException:ChangePasswordFailure' => 'Η επαλήθευση του κωδικού πρόσβασης απέτυχε.',
	'LoginException:Unknown' => 'Η σύνδεση απέτυχε λόγω άγνωστου σφάλματος.',

	'deprecatedfunction' => 'Προσοχή: Αυτός ο κώδικας χρησιμοποιεί την παρωχημένη συνάρτηση \'%s\' που δεν είναι συμβατή με αυτή την έκδοση του Elgg',

	'pageownerunavailable' => 'Προσοχή: Ο ιδιοκτήτης %d της σελίδας δεν είναι προσβάσιμος!',
	'viewfailure' => 'Υπήρξε εσωτερικό σφάλμα κατά την όψη %s',
	'view:missing_param' => "Η απαιτούμενη παράμετρος '%s' απουσιάζει από την όψη %s",
	'changebookmark' => 'Παρακαλώ αλλάξτε τον σελιδοδείκτη σας για αυτή τη σελίδα',
	'noaccess' => 'Το περιεχόμενο που ζητήσατε έχει αφαιρεθεί ή δεν έχετε δικαίωμα να το δείτε.',
	'error:missing_data' => 'Το αίτημά σας περιείχε ελλιπείς πληροφορίες',
	'save:fail' => 'H αποθήκευση των δεδομένων σας απέτυχε',
	'save:success' => 'Τα δεδομένα σας αποθηκεύτηκαν',

	'error:default:title' => 'Ουπς...',
	'error:default:content' => 'Ουπς... κάτι πήγε στραβά.',
	'error:400:title' => 'Σφάλμα αιτήματος',
	'error:400:content' => 'Συγνώμη. Το αίτημα είναι μη έγκυρο ή μη ολοκληρωμένο.',
	'error:403:title' => 'Απαγορεύεται',
	'error:403:content' => 'Συγνώμη. Δεν είστε εξουσιοδοτημένοι να δείτε τη ζητούμενη σελίδα.',
	'error:404:title' => 'Η σελίδα δεν βρέθηκε',
	'error:404:content' => 'Λυπούμαστε. Η σελίδα που ζητήσατε δεν βρέθηκε.',

	'upload:error:ini_size' => 'Το αρχείο που προσπαθήσατε να ανεβάσετε είναι πολύ μεγάλο.',
	'upload:error:form_size' => 'Το αρχείο που προσπαθήσατε να ανεβάσετε είναι πολύ μεγάλο.',
	'upload:error:partial' => 'Το ανέβασμα του αρχείου δεν ολοκληρώθηκε.',
	'upload:error:no_file' => 'Δεν έχετε επιλέξει κάποιο αρχείο.',
	'upload:error:no_tmp_dir' => 'Το αρχείο που ανεβάσατε δεν μπορεί να αποθηκευτεί.',
	'upload:error:cant_write' => 'Το αρχείο που ανεβάσατε δεν μπορεί να αποθηκευτεί.',
	'upload:error:extension' => 'Το αρχείο που ανεβάσατε δεν μπορεί να αποθηκευτεί.',
	'upload:error:unknown' => 'Το ανέβασμα του αρχείου απέτυχε.',

//###################################################################################
//#                              END OF PART 1                                      #
//###################################################################################


/**
 * User details
 */

	'name' => "Ονοματεπώνυμο",
	'email' => "Διεύθυνση ηλεκτρονικού ταχυδρομείου",
	'username' => "Όνομα χρήστη",
	'loginusername' => "Όνομα χρήστη ή διεύθυνση ηλ. ταχυδρομείου",
	'password' => "Κωδικός πρόσβασης",
	'passwordagain' => "Κωδικός πρόσβασης (ξανά για επαλήθευση)",
	'admin_option' => "Ορισμός αυτού του χρήση ως διαχειριστή;",

/**
 * Access
 */

	'PRIVATE' => "Ιδιωτικό",
	'LOGGED_IN' => "Συνδεδεμένοι χρήστες",
	'PUBLIC' => "Δημόσιο",
	'LOGGED_OUT' => "Αποσυνδεδεμένοι χρήστες",
	'access:friends:label' => "Φίλοι",
	'access' => "Πρόσβαση",
	'access:overridenotice' => "Σημείωση: Λόγω της πολιτικής αυτής της ομάδας, το περιεχόμενο είναι προσβάσιμο μόνο από τα μέλη της.",
	'access:limited:label' => "Περιορισμένο",
	'access:help' => "Επίπεδο πρόσβασης", 
	'access:read' => "Δικαίωμα  ανάγνωσης",
	'access:write' => "Δικαίωμα εγγραφής",
	'access:admin_only' => "Μόνο διαχειριστές",
	'access:missing_name' => "Λείπει το όνομα του επιπέδου πρόσβασης",
	'access:comments:change' => "Η συζήτηση είναι προς το παρόν ορατή σε περιορισμένο κοινό. Σκεφτείτε με ποιους θέλετε να το μοιραστείτε.",


/**
 * Dashboard and widgets
 */

	'dashboard' => "Πίνακας ελέγχου", 
	'dashboard:nowidgets' => "Ο πίνακας ελέγχου σας επιτρέπει να παρακολουθείτε τη δραστηριότητα και το περιεχόμενο που σας ενδιαφέρει σε αυτή τη σελίδα.", 

	'widgets:add' => 'Προσθήκη widget', 
	'widgets:add:description' => "Κάντε κλικ σε οποιοδήποτε widget από τα παρακάτω για να το προσθέσετε στη σελίδα.",
	'widgets:panel:close' => "Κλείστε τον πίνακα ελέγχου των widgets",
	'widgets:position:fixed' => '(Σταθερή θέση στη σελίδα)',
	'widget:unavailable' => 'Έχετε ήδη προσθέσει αυτό το widget',
	'widget:numbertodisplay' => 'Πλήθος στοιχείων για προβολή', 

	'widget:delete' => 'Αφαίρεση του %s',
	'widget:edit' => 'Προσαρμόστε αυτό το widget', 

	'widgets' => "Widgets", 
	'widget' => "Widget", 
	'item:object:widget' => "Widgets", 
	'widgets:save:success' => "Το widget αποθηκεύτηκε επιτυχώς.", 
	'widgets:save:failure' => "Το widget δεν μπόρεσε να αποθηκευτεί.", 
	'widgets:add:success' => "Το widget προστέθηκε με επιτυχία.", 
	'widgets:add:failure' => "Το widget δεν μπόρεσε να προστεθεί.", 
	'widgets:move:failure' => "Η νέα θέση του widget δεν μπόρεσε να αποθηκευτεί.", 
	'widgets:remove:failure' => "Αδυναμία αφαίρεσης του widget", /

/**
 * Groups
 */

	'group' => "Ομάδα",
	'item:group' => "Ομάδες",

/**
 * Users
 */

	'user' => "Χρήστης",
	'item:user' => "Χρήστες",

/**
 * Friends
 */

	'friends' => "Φίλοι",
	'friends:yours' => "Οι φίλοι σας",
	'friends:owned' => "Οι φίλοι του/της %s",
	'friend:add' => "Προσθήκη φίλου",
	'friend:remove' => "Διαγραφή φίλου",

	'friends:add:successful' => "Ο/Η %s προστέθηκε επιτυχώς στους φίλους σας.",
	'friends:add:failure' => "Ο/Η %s δεν μπόρεσε να προστεθεί στους φίλους σας.",

	'friends:remove:successful' => "Αφαιρέσατε επιτυχώς τον/την %s από τους φίλους σας.",
	'friends:remove:failure' => "Ο/Η %s δεν μπόρεσε να αφαιρεθεί από τους φίλους σας.",

	'friends:none' => "Προς το παρόν δεν βρέθηκαν φίλοι.",
	'friends:none:you' => "Δεν έχετε κάποιο φίλο προς το παρόν.",

	'friends:none:found' => "Δεν βρέθηκε κανένας φίλος.",

	'friends:of:none' => "Προς το παρόν κανένας δεν έχει προσθέσει αυτόν το χρήστη ως φίλο.",
	'friends:of:none:you' => "Προς το παρόν δεν σας έχει προσθέσει κανένας χρήστης ως φίλο. Για να σας βρούνε άλλοι χρήστες, αρχίστε να εμπλουτίζετε το προφίλ σας!",

	'friends:of:owned' => "Άτομα που πρόσθεσαν ως φίλο τον/την %s",

	'friends:of' => "Φίλοι του/της",
	'friends:collections' => "Ομάδες φίλων", 
	'collections:add' => "Νέα ομάδα",
	'friends:collections:add' => "Νέα ομάδα φίλων",
	'friends:addfriends' => "Επιλέξτε φίλους",
	'friends:collectionname' => "Όνομα ομάδας",
	'friends:collectionfriends' => "Φίλοι στην ομάδα",
	'friends:collectionedit' => "Επεξεργασία αυτής της ομάδας",
	'friends:nocollections' => "Προς το παρόν δεν έχετε δημιουργήσει κάποια ομάδα.",
	'friends:collectiondeleted' => "Η ομάδα σας έχει διαγραφεί.",
	'friends:collectiondeletefailed' => "Αδυναμία διαγραφής αυτής της ομάδας. Είτε δεν έχετε το δικαίωμα, είτε υπήρξε κάποιο άλλο πρόβλημα.",
	'friends:collectionadded' => "Η ομάδα σας δημιουργήθηκε επιτυχώς",
	'friends:nocollectionname' => "Πρέπει να δώσετε ένα όνομα στην ομάδα σας για να μπορέσει να δημιουργηθεί.",
	'friends:collections:members' => "Μέλη ομάδας",
	'friends:collections:edit' => "Επεξεργασία ομάδας",
	'friends:collections:edited' => "Αποθηκευμένη ομάδα",
	'friends:collection:edit_failed' => 'Η ομάδα δεν μπόρεσε να αποθηκευτεί.',

	'friendspicker:chararray' => 'ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ', 

	'avatar' => 'Avatar', 
	'avatar:noaccess' => "Δεν μπορείτε να επεξεργαστείτε το avatar αυτού του χρήστη",
	'avatar:create' => 'Δημιουργία avatar',
	'avatar:edit' => 'Επεξεργασία avatar',
	'avatar:preview' => 'Προεπισκόπηση',
	'avatar:upload' => 'Ανέβασμα νέου avatar',
	'avatar:current' => 'Τρέχον avatar',
	'avatar:remove' => 'Ορισμός του προεπιλεγμένου avatar',
	'avatar:crop:title' => 'Εργαλείο περικοπής avatar',
	'avatar:upload:instructions' => "Το avatar προβάλλεται σε ολόκληρη την ιστοσελίδα. Μπορείτε να το αλλάζετε όσο συχνά επιθυμείτε. (Αποδεκτοί τύποι αρχείων: GIF, JPG ή PNG)",
	'avatar:create:instructions' => 'Κάντε κλικ και σύρτε παρακάτω ένα τετράγωνο που ταιριάζει με το πως θέλετε να περικοπεί το avatar σας. Μία προεπισκόπηση θα εμφανιστεί στο πλαίσιο δεξιά. Όταν σας ικανοποιήσει το αποτέλεσμα, κάντε κλικ στο κουμπί \'Δημιουργία avatar\'. Το περιεχόμενο του παραθύρου προεσκόπισης θα χρησιμοποιείται σε όλη την ιστοσελίδα ως το avatar σας.',
	'avatar:upload:success' => 'Το avatar ανέβηκε επιτυχώς',
	'avatar:upload:fail' => 'Το ανέβασμα του avatar απέτυχε',
	'avatar:resize:fail' => 'Αποτυχία αλλαγής μεγέθους του avatar',
	'avatar:crop:success' => 'Η περικοπή του avatar ήταν επιτυχής',
	'avatar:crop:fail' => 'Η περικοπή του avatar απέτυχε',
	'avatar:remove:success' => 'Η αφαίρεση του avatar ήταν επιτυχής',
	'avatar:remove:fail' => 'Αποτυχία αφαίρεσης του avatar',

	'profile:edit' => 'Επεξεργασία προφίλ',
	'profile:aboutme' => "Σχετικά με εμένα",
	'profile:description' => "Σχετικά με εμένα",
	'profile:briefdescription' => "Σύντομη περιγραφή",
	'profile:location' => "Τοποθεσία",
	'profile:skills' => "Ικανότητες",
	'profile:interests' => "Ενδιαφέροντα",
	'profile:contactemail' => "Διεύθυνση ηλ. ταχυδρομειίου",
	'profile:phone' => "Τηλέφωνο",
	'profile:mobile' => "Κινητό τηλέφωνο",
	'profile:website' => "Ιστοσελίδα",
	'profile:twitter' => "Όνομα χρήστη Twitter",
	'profile:saved' => "Το προφίλ σας αποθηκεύτηκε επιτυχώς.",

	'profile:field:text' => 'Σύντομο κείμενο',
	'profile:field:longtext' => 'Περιοχή μακροσκελούς κειμένου',
	'profile:field:tags' => 'Ετικέτες',
	'profile:field:url' => 'Υπερσύνδεσμος',
	'profile:field:email' => 'Διεύθυνση ηλ. ταχυδρομείου',
	'profile:field:location' => 'Τοποθεσία',
	'profile:field:date' => 'Ημερομηνία',

	'admin:appearance:profile_fields' => 'Επεξεργασία Πεδίων Προφίλ',
	'profile:edit:default' => 'Επεξεργασία πεδίων προφίλ',
	'profile:label' => "Ετικέτα προφίλ",
	'profile:type' => "Τύπος προφίλ",
	'profile:editdefault:delete:fail' => 'Αποτυχία διαγραφής του προεπιλεγμένου πεδίου προφίλ',
	'profile:editdefault:delete:success' => 'Το πεδίο προφίλ διαγράφτηκε',
	'profile:defaultprofile:reset' => 'Τα πεδία προφίλ επαναφέρθηκαν στις προεπιλογές συστήματος',
	'profile:resetdefault' => 'Επαναφορά των πεδίων προφίλ στις προεπιλογές συστήματος',
	'profile:resetdefault:confirm' => 'Είστε σίγουρος ότι θέλετε να διαγράψετε τα προσαρμοσμένα πεδία προφίλ;',
	'profile:explainchangefields' => "Μπορείτε να αντικαταστήσετε τα υπάρχοντα πεδία προφίλ με δικά σας, συμπληρώνοντας την παρακάτω φόρμα. \n\n Δώστε έναν τίτλο στο νέο πεδίο (πχ. \'Αγαπημένη ομάδα\'), επιλέξτε τον τύπο του πεδίου (πχ. Κείμενο, Υπερσύνδεσμος, Ετικέτες) και κάντε κλικ στο κουμπί 'Προσθήκη'. Για να αναδιατάξετε τα πεδία, σύρτε τα από την περιοχή/λαβή δίπλα στον τίτλο. Για να επεξεργαστείτε τον τίτλο ενός πεδίου, κάντε κλικ στο κείμενο της ετικέτας. \n\n Μπορείτε να επαναφέρετε τις αρχικές ρυθμίσεις προφίλ οποιαδήποτε στιγμή το θελήσετε, αλλά θα χάσετε οποιαδήποτε πληροφορία έχει εισαχθεί στα προσαρμοσμένα πεδία.", 
	'profile:editdefault:success' => 'Προστέθηκε επιτυχώς ένα νέο πεδίο προφίλ',
	'profile:editdefault:fail' => 'Το προεπιλεγμένο προφίλ δεν μπόρεσε να αποθηκευτεί.',
	'profile:field_too_long' => 'Οι πληροφορίες προφίλ δεν μπορούν να αποθηκευτούν καθώς το τμήμα "%s" είναι υπερβολικά μακροσκελές.',
	'profile:noaccess' => "Δεν έχετε το δικαίωμα να επεξεργαστείτε αυτό το προφίλ.",
	'profile:invalid_email' => 'Το %s πρέπει να είναι μια έγκυρη διεύθυνση ηλ. ταχυδρομείου',


/**
 * Feeds
 */
	'feed:rss' => 'Ροή RSS για αυτή τη σελίδα',
/**
 * Links
 */
	'link:view' => 'προβολή συνδέσμου',
	'link:view:all' => 'Προβολή όλων',


/**
 * River
 */
	'river' => "Ροή Ειδήσεων", 
	'river:friend:user:default' => "Ο/Η %s έγινε φίλος/η με τον/την %s",
	'river:update:user:avatar' => 'Ο/Η %s άλλαξε το avatar του/της',
	'river:update:user:profile' => 'Ο/Η %s ανανέωσε το προφίλ του/της',
	'river:noaccess' => 'Δεν έχετε δικαίωμα προβολής αυτού του περιεχομένου.',
	'river:posted:generic' => 'Ο/Η %s δημοσίευσε', 
	'riveritem:single:user' => 'ένας χρήστης',
	'riveritem:plural:user' => 'κάποιοι χρήστες',
	'river:ingroup' => 'στην ομάδα %s',
	'river:none' => 'Καμία δραστηριότητα',
	'river:update' => 'Ενημέρωση για %s', 
	'river:delete' => 'Αφαιρέστε αυτή τη δραστηριότητα', 
	'river:delete:success' => 'Η δραστηριότητα αφαιρέθηκε από τη Ροή Ειδήσεων', 
	'river:delete:fail' => 'Η δραστηριότητα δεν μπόρεσε να αφαιρεθεί από τη Ροή Ειδήσεων', 
	'river:subject:invalid_subject' => 'Μη έγκυρος χρήστης',
	'activity:owner' => 'Προβολή δραστηριότητας',

	'river:widget:title' => "Δραστηριότητα",
	'river:widget:description' => "Προβολή πρόσφατης δραστηριότητας",
	'river:widget:type' => "Είδος δραστηριότητας",
	'river:widgets:friends' => 'Δραστηριότητα φίλων',
	'river:widgets:all' => 'Δραστηριότητα όλης της ιστοσελίδας',

/**
 * Notifications
 */
	'notifications:usersettings' => "Ρυθμίσεις ειδοποιήσεων",
	'notification:method:email' => 'Ηλεκτρονικό ταχυδρομείο',

	'notifications:usersettings:save:ok' => "Οι ρυθμίσεις ειδοποιήσεων αποθηκεύτηκαν επιτυχώς.",
	'notifications:usersettings:save:fail' => "Υπήρξε πρόβλημα κατά την αποθήκευση των ρυθμίσεων ειδοποίησης.",

	'notification:subject' => 'Ειδοποίηση για %s',
	'notification:body' => 'Προβολή της νέας δραστηριότητας σε %s',

/**
 * Search
 */

	'search' => "Αναζήτηση",
	'searchtitle' => "Αναζήτηση: %s",
	'users:searchtitle' => "Αναζήτηση χρηστών: %s",
	'groups:searchtitle' => "Αναζήτηση ομάδων: %s",
	'advancedsearchtitle' => "%s με σχετικά αποτελέσματα %s", 
	'notfound' => "Δεν βρέθηκαν αποτελέσματα.",
	'next' => "Επόμενο",
	'previous' => "Προηγούμενο",

	'viewtype:change' => "Αλλαγή τύπου κατηγοριοποίησης",
	'viewtype:list' => "Προβολή λίστας",
	'viewtype:gallery' => "Συλλογή", 

	'tag:search:startblurb' => "Αντικείμενα με σχετικές ετικέτες '%s':", 

	'user:search:startblurb' => "Σχετικοί χρήστες '%s':", 
	'user:search:finishblurb' => "Για να δείτε περισσότερα, κάντε κλικ εδώ.",

	'group:search:startblurb' => "Σχετικές ομάδες '%s':", 
	'group:search:finishblurb' => "Για να δείτε περισσότερα, κάντε κλικ εδώ.",
	'search:go' => 'Αναζήτηση',
	'userpicker:only_friends' => 'Μόνο φίλοι',

/**
 * Account
 */

	'account' => "Λογαριασμός",
	'settings' => "Ρυθμίσεις",
	'tools' => "Εργαλεία",
	'settings:edit' => 'Επεξεργασία ρυθμίσεων',

	'register' => "Εγγραφή",
	'registerok' => "Έγγραφτήκατε επιτυχώς για %s.", 
	'registerbad' => "Η εγγραφή σας απέτυχε λόγω κάποιου άγνωστου προβλήματος.",
	'registerdisabled' => "Η εγγραφή έχει απενεργοποιηθεί από τον διαχειριστή του συστήματος",
	'register:fields' => 'Απαιτούνται όλα τα πεδία',

	'registration:notemail' => 'Η διεύθυνση ηλ. ταχυδρομείου που παρείχατε φαίνεται να είναι μη έγκυρη.',
	'registration:userexists' => 'Το όνομα χρήστη υπάρχει ήδη',
	'registration:usernametooshort' => 'Το όνομα χρήστη θα πρέπει να είναι τουλάχιστον %u χαρακτήρες.',
	'registration:usernametoolong' => 'Το όνομα χρήστη είναι πολύ μεγάλο. Το μέγιστο πλήθος χαρακτήρων που μπορεί να έχει είναι %u .',
	'registration:passwordtooshort' => 'Ο κωδικός πρόσβασης θα πρέπει να είναι τουλάχιστον %u χαρακτήρες.',
	'registration:dupeemail' => 'Αυτή η διεύθυνση ηλ. ταχυδρομείου είναι ήδη καταχωρημένη.',
	'registration:invalidchars' => 'Λυπούμαστε. Το όνομα χρήστη περιέχει τον μη έγκυρο χαρακτήρα %s. Οι εξής χαρακτήρες είναι έγκυροι: %s',
	'registration:emailnotvalid' => 'Λυπούμαστε. Η διεύθυνση ηλ. ταχυδρομείου είναι μη έγκυρη σε αυτό το σύστημα',
	'registration:passwordnotvalid' => 'Λυπούμαστε. Ο κωδικός πρόσβασης που εισάγατε είναι μη έγκυρος σε αυτό το σύστημα.',
	'registration:usernamenotvalid' => 'Λυπούμαστε. Το όνομα χρήστη που εισάγατε είναι μη έγκυρο σε αυτό το σύστημα.',

	'adduser' => "Προσθήκη χρήστη",
	'adduser:ok' => "Προσθέσατε επιτυχώς ένα νέο χρήστη.", 
	'adduser:bad' => "Ο νέος χρήστης δεν μπόρεσε να δημιουργηθεί.",

	'user:set:name' => "Ρυθμίσεις ονόματος λογαριασμού",
	'user:name:label' => "Εμφανιζόμενο όνομα",
	'user:name:success' => "To εμφανιζόμενο όνομα αλλάχτηκε επιτυχώς",
	'user:name:fail' => "Αποτυχία αλλαγής του εμφανιζόμενου ονόματος",

	'user:set:password' => "Κωδικός πρόσβασης λογαριασμού",
	'user:current_password:label' => 'Τρέχον κωδικός',
	'user:password:label' => "Νέος κωδικός",
	'user:password2:label' => "Νέος κωδικός ξανά",
	'user:password:success' => "Ο κωδικός πρόσβασης άλλαξε",
	'user:password:fail' => "Αδυναμία αλλαγής κωδικού.", 
	'user:password:fail:notsame' => "Οι κωδικοί πρόσβασης διαφέρουν!",
	'user:password:fail:tooshort' => "Ο κωδικός πρόσβασης είναι πολύ μικρός!",
	'user:password:fail:incorrect_current_password' => 'Εισάγατε λάθος τον τρέχοντα κωδικό πρόσβασης.',
	'user:changepassword:unknown_user' => 'Μη έγκυρος χρήστης.',
	'user:changepassword:change_password_confirm' => 'Θα πραγματοποιηθεί αλλαγή του κωδικού σας.',

	'user:set:language' => "Ρυθμίσεις γλώσσας",
	'user:language:label' => "Γλώσσα",
	'user:language:success' => "Οι ρυθμίσεις γλώσσας ανανεώθηκαν.",
	'user:language:fail' => "Αδυναμία αποθήκευσης των ρυθμίσεων γλώσσας.",

	'user:username:notfound' => 'Το όνομα χρήστη %s δεν βρέθηκε.',

	'user:password:lost' => 'Έχασα τον κωδικό μου',
	'user:password:changereq:success' => 'Κατατέθηκε επιτυχώς αίτημα ανάκτησης κωδικού. Σας έχει σταλεί μήνυμα ηλεκτρονικού ταχυδρομείου',
	'user:password:changereq:fail' => 'Αδυναμία αίτησης απόκτησης νέου κωδικού.',

	'user:password:text' => 'Για να ζητήσετε νέο κωδικό, εισάγετε το όνομα χρήστη ή τη διεύθυνση ηλεκτρονικού ταχυδρομείου και κάντε κλικ στο κουμπί Αίτηση.', 

	'user:persistent' => 'Να με θυμάσαι',

	'walled_garden:welcome' => 'Καλωσήρθατε στο', 


//###################################################################################
//#                              END OF PART 2                                      #
//###################################################################################



/**
 * Administration
 */
	'menu:page:header:administer' => 'Διαχείριση',
	'menu:page:header:configure' => 'Διαμόρφωση',
	'menu:page:header:develop' => 'Ανάπτυξη',
	'menu:page:header:default' => 'Άλλο', 

	'admin:view_site' => 'Προβολή ιστοσελίδας',
	'admin:loggedin' => 'Συνδεδεμένος/η ως %s',
	'admin:menu' => 'Μενού',

	'admin:configuration:success' => "Οι ρυθμίσεις σας αποθηκεύτηκαν.",
	'admin:configuration:fail' => "Οι ρυθμίσεις σας δεν μπόρεσαν να αποθηκευτούν.",
	'admin:configuration:dataroot:relative_path' => 'Το "%s" δεν μπορεί να οριστεί ως dataroot γιατί δεν είναι απόλυτο μονοπάτι.',
	'admin:configuration:default_limit' => 'Το πλήθος των στοιχείων ανά σελίδα πρέπει να είναι τουλάχιστον 1.',

	'admin:unknown_section' => 'Μη Έγκυρο Τμήμα Διαχειριστή.',

	'admin' => "Διαχείριση",
	'admin:description' => "Ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε όλες τις πτυχές του συστήματος· από τη διαχείριση χρηστών μέχρι τη συμπεριφορά τον πρόσθετων. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",

	'admin:statistics' => "Στατιστικά",
	'admin:statistics:overview' => 'Επισκόπηση',
	'admin:statistics:server' => 'Πληροφορίες Εξυπηρετητή',
	'admin:statistics:cron' => 'Cron',
	'admin:cron:record' => 'Πρόσφατες (δι)εργασίες Cron', 
	'admin:cron:period' => 'Περίοδος Cron', 
	'admin:cron:friendly' => 'Ολοκληρώθηκε τελευταία',
	'admin:cron:date' => 'Ημερομηνία και ώρα',

	'admin:appearance' => 'Εμφάνιση',
	'admin:administer_utilities' => 'Βοηθήματα', 
	'admin:develop_utilities' => 'Βοηθήματα', 
	'admin:configure_utilities' => 'Βοηθήματα', 
	'admin:configure_utilities:robots' => 'Robots.txt', 

	'admin:users' => "Χρήστες",
	'admin:users:online' => 'Συνδεδεμένοι',
	'admin:users:newest' => 'Πρόσφατα Εγγεγραμένοι',
	'admin:users:admins' => 'Διαχειριστές',
	'admin:users:add' => 'Προσθήκη νέου χρήστη',
	'admin:users:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε τις ρυθμίσεις χρήστη για την ιστο σελίδα σας. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",
	'admin:users:adduser:label' => "Κάντε κλικ εδώ για προσθήκη νέου χρήστη...",
	'admin:users:opt:linktext' => "Τροποποίηση χρηστών...",
	'admin:users:opt:description' => "Τροποποίηση χρηστών και πληροφοριών λογαριασμών. ",
	'admin:users:find' => 'Αναζήτηση',

	'admin:administer_utilities:maintenance' => 'Λειτουργία συντήρησης',
	'admin:upgrades' => 'Αναβαθμίσεις',

	'admin:settings' => 'Ρυθμίσεις',
	'admin:settings:basic' => 'Βασικές Ρυθμίσεις',
	'admin:settings:advanced' => 'Ρυθμίσεις για προχωρημένους', 
	'admin:site:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε τις καθολικές ρυθμίσεις χρήστη για την ιστοσελίδα σας. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",
	'admin:site:opt:linktext' => "Διαμόρφωση ιστοσελίδας...",
	'admin:settings:in_settings_file' => 'Αυτή η ρύθμιση έχει καθοριστεί στο αρχείο settings.php', 

	'admin:legend:security' => 'Ασφάλεια',
	'admin:site:secret:intro' => 'Το Elgg χρησιμοποιεί ένα κλειδί(key) για να παράγει κωδικούς ασφαλείας(tokens) για διάφορους σκοπούς.',
	'admin:site:secret_regenerated' => "Το κρυφό κλειδί της ιστοσελίδας σας ξαναπαράχθηκε.",
	'admin:site:secret:regenerate' => "Παραγωγή κρυφού κλειδιού για τη σελίδας", 
	'admin:site:secret:regenerate:help' => "Σημείωση: Ξαναπαράγωντας το κρυφό κλειδί της ιστοσελίδας, μπορεί να προκαλέσετε δυσαρέσκεια σε κάποιους χρήστες, καθιστώντας μη έγκυρους τους κωδικούς ασφαλείας(tokens) που χρησιμοποιούνται στα cookies τύπου \"Να με θυμάσαι\", στα αιτήματα επαλήθευσης διευθύνσεων ηλ. ταχυδρομείου κλπ.",
	'site_secret:current_strength' => 'Δύναμη κλειδιού',
	'site_secret:strength:weak' => "Ασθενές",
	'site_secret:strength_msg:weak' => "Σας προτείνουμε ένθερμα να ξαναδημιουργήσετε το κρυφό κλειδί της ιστοσελίδας σας.",
	'site_secret:strength:moderate' => "Μέτριο",
	'site_secret:strength_msg:moderate' => "Σας προτείνουμε για μεγαλύτερη ασφάλεια να ξαναδημιουργήσετε το κρυφό κλειδί της ιστοσελίδας σας.",
	'site_secret:strength:strong' => "Δυνατό",
	'site_secret:strength_msg:strong' => "Το κρυφό κλειδί της σελίδας σας είναι επαρκώς δυνατό. Δεν υπάρχει λόγος να το ξαναδημιουργήσετε.",

	'admin:dashboard' => 'Πίνακας Ελέγχου',
	'admin:widget:online_users' => 'Συνδεδεμένοι χρήστες',
	'admin:widget:online_users:help' => 'Απαριθμεί τους τρέχοντα συνδεδεμένους χρήστες',
	'admin:widget:new_users' => 'Νέοι χρήστες',
	'admin:widget:new_users:help' => 'Απαριθμεί τους νεότερους χρήστες',
	'admin:widget:banned_users' => 'Αποκλεισμένοι χρήστες',
	'admin:widget:banned_users:help' => 'Απαριθμεί τους αποκλεισμένους χρήστες',
	'admin:widget:content_stats' => 'Στατιστικά περιεχομένου',
	'admin:widget:content_stats:help' => 'Παρακολουθείστε το περιεχόμενο που δημιουργούν οι χρήστες σας',
	'admin:widget:cron_status' => 'Κατάσταση Cron',
	'admin:widget:cron_status:help' => 'Δείχνει την κατάσταση των διεργασιών cron κατά την τελευταία τους εκτέλεση',
	'widget:content_stats:type' => 'Τύπος περιεχομένου',
	'widget:content_stats:number' => 'Αριθμός',

	'admin:widget:admin_welcome' => 'Καλωσήρθατε',
	'admin:widget:admin_welcome:help' => "Μια σύντομη εισαγωγή στην περιοχή διαχείρισης του Elgg", 
	'admin:widget:admin_welcome:intro' =>
'Καλωσήρθατε στο Elgg! Αυτή τη στιγμή βρίσκεστε στον πίνακα ελέγχου διαχειριστή που είναι χρήσιμος για να παρακολουθείτε τι συμβαίνει στη σελίδα.',

	'admin:widget:admin_welcome:admin_overview' =>
"Πλοήγηση στην περιοχή διαχείρισης παρέχεται από το μενού στα δεξιά. Είναι οργανωμένη σε τρία τμήματα:
	<dl>
		<dt>Διαχείριση</dt><dd>Καθημερινές εργασίες, όπως η παρακολούθηση περιεχομένου που έχει αναφερθεί, έλεγχος των συνδεδεμένων χρηστών και προβολή των στατιστικών στοιχείων.</dd>
		<dt>Διαμόρφωση</dt><dd>Περιστασιακές εργασίες, όπως η ρύθμιση του ονόματος της σελίδας ή η ενεργοποίηση ενός προσθέτου.</dd>
		<dt>Ανάπτυξη</dt><dd>Για τους προγραμματιστές που αναπτύσσουν πρόσθετα ή σχεδιάζουν θέματα. (Απαιτεί ένα πρόσθετο για προγραμματιστές.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Σιγουρευτείτε ότι είδατε τους διαθέσιμους πόρους μέσω των συνδέσμων στο κάτω μέρος της σελίδας. Ευχαριστούμε που χρησιμοποιείτε το Elgg!',

	'admin:widget:control_panel' => 'Πίνακας Ελέγχου',
	'admin:widget:control_panel:help' => "Παρέχει εύκολη πρόσβαση σε συνηθισμένες ρυθμίσεις",

	'admin:cache:flush' => 'Εκκαθάριση της κρυφής μνήμης(cache)',
	'admin:cache:flushed' => "Η κρυφής μνήμη(cache) της σελίδας εκκαθαρίστηκε",

	'admin:footer:faq' => 'Συχνές ερωτήσεις σχετικά με τη διαχείριση',
	'admin:footer:manual' => 'Εγχειρίδιο διαχείρισης',
	'admin:footer:community_forums' => 'Τα φόρουμ της κοινότητας του Elgg',
	'admin:footer:blog' => 'Ιστολόγιο του Elgg',

	'admin:plugins:category:all' => 'Όλα τα πρόσθετα',
	'admin:plugins:category:active' => 'Ενεργά πρόσθετα',
	'admin:plugins:category:inactive' => 'Ανενεργά πρόσθετα',
	'admin:plugins:category:admin' => 'Διαχείριση', 
	'admin:plugins:category:bundled' => 'Ομαδοποιημένα', 
	'admin:plugins:category:nonbundled' => 'Μη-ομαδοποιημένα',
	'admin:plugins:category:content' => 'Περιεχόμενο',
	'admin:plugins:category:development' => 'Ανάπτυξη',
	'admin:plugins:category:enhancement' => 'Βελτιώσεις',
	'admin:plugins:category:api' => 'Υπηρεσία/API',
	'admin:plugins:category:communication' => 'Επικοινωνία',
	'admin:plugins:category:security' => 'Ασφάλεια και ανεπιθύμητη αλληλογραφία',
	'admin:plugins:category:social' => 'Κοινωνικό',
	'admin:plugins:category:multimedia' => 'Πολυμέσα',
	'admin:plugins:category:theme' => 'Θέματα',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Βοηθήματα',

	'admin:plugins:markdown:unknown_plugin' => 'Άγνωστο πρόσθετο.',
	'admin:plugins:markdown:unknown_file' => 'Άγνωστο αρχείο.',

	'admin:notices:could_not_delete' => 'Η σημείωση δεν μπόρεσε να σβηστεί.',
	'item:object:admin_notice' => 'Σημείωση Διαχειριστή',

	'admin:options' => 'Επιλογές διαχειριστή',

//###################################################################################
//#                              END OF PART 3                                      #
//###################################################################################


/**
 * Plugins
 */

	'plugins:disabled' => 'Τα πρόσθετα δεν φορτώνονται επειδή υπάρχει ένα αρχείο με το όνομα "disabled" στο φάκελο mod.', 
	'plugins:settings:save:ok' => "Οι ρυθμίσεις για το πρόσθετο %s αποθηκεύτηκαν επιτυχώς.",
	'plugins:settings:save:fail' => "Υπήρξε πρόβλημα κατά την αποθήκευση των ρυθμίσεων για το πρόσθετο %s.",
	'plugins:usersettings:save:ok' => "Οι ρυθμίσεις χρήστη για το πρόσθετο %s αποθηκεύτηκαν επιτυχώς.",
	'plugins:usersettings:save:fail' => "Υπήρξε πρόβλημα κατά την αποθήκευση των ρυθμίσεων χρήστη για το πρόσθετο %s.",
	'item:object:plugin' => 'Πρόσθετα',

	'admin:plugins' => "Πρόσθετα",
	'admin:plugins:activate_all' => 'Ενεργοποίηση όλων',
	'admin:plugins:deactivate_all' => 'Απενεργοποίηση όλων',
	'admin:plugins:activate' => 'Ενεργοποίηση',
	'admin:plugins:deactivate' => 'Απενεργοποίηση',
	'admin:plugins:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή επιτρέπει τον έλεγχο και τη διαμόρφωση των εγκατεστημένων εργαλείων στη σελίδα σας.", 
	'admin:plugins:opt:linktext' => "Διαμόρφωση εργαλείων...", 
	'admin:plugins:opt:description' => "Διαμορφώστε τα εργαλεία που έχουν εγκατασταθεί στη σελίδα.", 
	'admin:plugins:label:author' => "Συγγραφέας", 
	'admin:plugins:label:copyright' => "Πνευματικά δικαιώματα",
	'admin:plugins:label:categories' => 'Κατηγορίες',
	'admin:plugins:label:licence' => "Άδεια Χρήσης", 
	'admin:plugins:label:website' => "Υπερσύνδεσμος", 
	'admin:plugins:label:repository' => "Αποθετήριο",
	'admin:plugins:label:bugtracker' => "Αναφορά προβλήματος",
	'admin:plugins:label:donate' => "Δωρεά",
	'admin:plugins:label:moreinfo' => 'περισσότερες πληροφορίες',
	'admin:plugins:label:version' => 'Έκδοση',
	'admin:plugins:label:location' => 'Τοποθεσία',
	'admin:plugins:label:contributors' => 'Συντελεστές',
	'admin:plugins:label:contributors:name' => 'Όνομα',
	'admin:plugins:label:contributors:email' => 'Διεύθυνση ηλ. ταχυδρομείου',
	'admin:plugins:label:contributors:website' => 'Ιστοσελίδα',
	'admin:plugins:label:contributors:username' => 'Όνομα χρήστη στην κοινότητα',
	'admin:plugins:label:contributors:description' => 'Περιγραφή',
	'admin:plugins:label:dependencies' => 'Εξαρτήσεις', 

	'admin:plugins:warning:elgg_version_unknown' => 'Αυτό το πρόσθετο χρησιμοποιεί ένα αρχείο δήλωσης(manifest) τύπου legacy και δεν καθορίζει κάποια συμβατή έκδοση του Elgg. Πιθανόν να μη δουλέψει!', 
	'admin:plugins:warning:unmet_dependencies' => 'Αυτό το πρόσθετο έχει ανικανοποίητες εξαρτήσεις και δεν μπορεί να ενεργοποιηθεί. Ελέγξτε τις εξαρτήσεις βάσει περισσότερων πληροφοριών.', 
	'admin:plugins:warning:invalid' => 'Αυτό το πρόσθετο είναι μη έγκυρο: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Ελέγξτε <a href="http://learn.elgg.org/en/stable/appendix/faqs.html"> το εγχειρίδιο του Elgg </a> για συμβουλές επίλυσης.',
	'admin:plugins:cannot_activate' => 'αδυναμία ενεργοποίησης',

	'admin:plugins:set_priority:yes' => "Το %s αναδιατάχθηκε.",
	'admin:plugins:set_priority:no' => "Αδυναμία αναδιάταξης του %s.",
	'admin:plugins:set_priority:no_with_msg' => "Αδυναμία αναδιάταξης του %s. Σφάλμα: %s",
	'admin:plugins:deactivate:yes' => "Το %s απενεργοποιήθηκε.",
	'admin:plugins:deactivate:no' => "Αδυναμία απενεργοποίησης του %s.",
	'admin:plugins:deactivate:no_with_msg' => "Αδυναμία απενεργοποίησης του %s. Σφάλμα: %s",
	'admin:plugins:activate:yes' => "Το %s ενεργοποιήθηκε.",
	'admin:plugins:activate:no' => "Αδυναμία ενεργοποίησης του %s.",
	'admin:plugins:activate:no_with_msg' => "Αδυναμία ενεργοποίησης του %s. Σφάλμα: %s",
	'admin:plugins:categories:all' => 'Όλες οι κατηγορίες',
	'admin:plugins:plugin_website' => 'Ιστοσελίδα πρόσθετου',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Έκδοση  %s',
	'admin:plugin_settings' => 'Ρυθμίσεις πρόσθετου',
	'admin:plugins:warning:unmet_dependencies_active' => 'Αυτό το πρόσθετο είναι ενεργό αλλά έχει ανικανοποίητες εξαρτήσεις. Μπορεί να αντιμετωπίσετε προβλήματα. Πατήστε στο "περισσότερες πληροφορίες" για λεπτομέρειες.',

	'admin:plugins:dependencies:type' => 'Τύπος',
	'admin:plugins:dependencies:name' => 'Όνομα',
	'admin:plugins:dependencies:expected_value' => 'Αναμενώμενη τιμή',
	'admin:plugins:dependencies:local_value' => 'Πραγματική τιμή',
	'admin:plugins:dependencies:comment' => 'Σχόλιο',

	'admin:statistics:description' => "Αυτή είναι μια επισκόπηση των στατιστικών στοιχείων στην ιστοσελίδα σας. Αν χρειάζεστε πιο λεπτομερή στοιχεία, ένα επαγγελματικό χαρακτηριστικό διαχείρισης είναι διαθέσιμο.", 
	'admin:statistics:opt:description' => "Προβολή στατιστικών πληροφοριών για τους χρήστες και τα στοιχεία στη σελίδα σας.",
	'admin:statistics:opt:linktext' => "Προβολή στατιστικών στοιχείων...",
	'admin:statistics:label:basic' => "Βασικά στατιστικά στοιχεία της ιστοσελίδας",
	'admin:statistics:label:numentities' => "Οντότητες στην ιστοσελίδα",
	'admin:statistics:label:numusers' => "Πλήθος χρηστών",
	'admin:statistics:label:numonline' => "Πλήθος συνδεδεμένων χρηστών",
	'admin:statistics:label:onlineusers' => "Τρέχοντα συνδεδεμένοι χρήστες",
	'admin:statistics:label:admins'=>"Διαχειριστές",
	'admin:statistics:label:version' => "Έκδοση Elgg",
	'admin:statistics:label:version:release' => "Κυκλοφορία",
	'admin:statistics:label:version:version' => "Έκδοση",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Εξυπηρετητής ιστού',
	'admin:server:label:server' => 'Εξυπηρετητής',
	'admin:server:label:log_location' => 'Τοποθεσία αρχείου καταγραφής',
	'admin:server:label:php_version' => 'Έκδοση PHP',
	'admin:server:label:php_ini' => 'Τοποθεσία αρχείου PHP ini',
	'admin:server:label:php_log' => 'Αρχείο καταγραφής PHP',
	'admin:server:label:mem_avail' => 'Διαθέσιμη μνήμη',
	'admin:server:label:mem_used' => 'Δεσμευμένη μνήμη',
	'admin:server:error_log' => "Αρχείο καταγραφής σφαλμάτων του εξυπηρετητή ιστού", 
	'admin:server:label:post_max_size' => 'Μέγιστο μέγεθος POST',
	'admin:server:label:upload_max_filesize' => 'Μέγιστο μέγεθος αρχείου για ανέβασμα', 
	'admin:server:warning:post_max_too_small' => '(Σημείωση: Το post_max_size πρέπει να είναι μεγαλύτερο από αυτή την τιμή για να υποστηριχθεί το ανέβασμα αρχείου τέτοιου μεγέθους)', 

	'admin:user:label:search' => "Εύρεση χρηστών:",
	'admin:user:label:searchbutton' => "Αναζήτηση",

	'admin:user:ban:no' => "Αδυναμία αποκλεισμού του χρήστη",
	'admin:user:ban:yes' => "Ο χρήστης αποκλείστηκε.",
	'admin:user:self:ban:no' => "Δεν μπορείτε να αποκλείσετε τον εαυτό σας",
	'admin:user:unban:no' => "Αδυναμία άρσης αποκλεισμού του χρήστη",
	'admin:user:unban:yes' => "Ο αποκλεισμός του χρήστη αναιρέθηκε.",
	'admin:user:delete:no' => "Αδυναμία διαγραφής του χρήστη",
	'admin:user:delete:yes' => "Ο χρήστης %s έχει αποκλειστεί",
	'admin:user:self:delete:no' => "Δεν μπορείτε να διαγράψετε τον εαυτό σας",

	'admin:user:resetpassword:yes' => "Επαναφορά κωδικού πρόσβασης. Ο χρήστης ειδοποιήθηκε.",
	'admin:user:resetpassword:no' => "Αδυναμία επαναφοράς κωδικού πρόσβασης.",

	'admin:user:makeadmin:yes' => "Ο χρήστης είναι πλέον διαχειριστής.",
	'admin:user:makeadmin:no' => "Αδυναμία ορισμού του χρήστη ως διαχειριστή.",

	'admin:user:removeadmin:yes' => "Ο χρήστης δεν είναι πλέον διαχειριστής.",
	'admin:user:removeadmin:no' => "Αδυναμία άρσης των δικαιωμάτων διαχειριστή από αυτό τον χρήστη.",
	'admin:user:self:removeadmin:no' => "Δεν μπορείτε να αφαιρέσετε τα δικαιώματα διαχειριστή που έχετε.",

	'admin:appearance:menu_items' => 'Στοιχεία μενού', 
	'admin:menu_items:configure' => 'Διαμόρφωση των στοιχείων του κυρίως μενού',
	'admin:menu_items:description' => 'Επιλέξτε ποια στοιχεία μενού θέλετε να φαίνονται ως προτεινόμενοι σύνδεσμοι. Τα μη χρησιμοποιημένα στοιχεία θα προστεθούν ως "Περισσότερα" στο τέλος της λίστας.', 
	'admin:menu_items:hide_toolbar_entries' => 'Αφαίρεση των συνδέσμων από το μενού της γραμμής εργαλείων;',
	'admin:menu_items:saved' => 'Τα στοιχεία του μενού αποθηκεύτηκαν.',
	'admin:add_menu_item' => 'Προσθήκη προσαρμοσμένου στοιχείου μενού', 
	'admin:add_menu_item:description' => 'Συμπληρώστε το εμφανιζόμενο όνομα και τον υπερσύνδεσμο για να προσθέσετε προσαρμοσμένα στοιχεία στο μενού πλοήγησης.',

	'admin:appearance:default_widgets' => 'Προεπιλεγμένα Widgets', 
	'admin:default_widgets:unknown_type' => 'Άγνωστος τύπος widget',
	'admin:default_widgets:instructions' => 'Προσθέστε, αφαιρέστε, τοποθετήστε και διαμορφώστε τα προεπιλεγμένα widgets για την επιλεγμένη σελίδα των widget.
Αυτές οι αλλαγές θα επηρεάσουν μόνο τους νέους χρήστες στη σελίδα.', 

	'admin:robots.txt:instructions' => "Επεξεργαστείτε παρακάτω το αρχείο robots.txt της ιστοσελίδας",
	'admin:robots.txt:plugins' => "Τα πρόσθετα, προσθέτουν τα εξής στο αρχείο robots.txt",
	'admin:robots.txt:subdir' => "Το εργαλείο robots.txt δεν θα δουλέψει επειδή το Elgg είναι εγκατεστημένο σε ένα υποφάκελο",
	'admin:robots.txt:physical' => "Το εργαλείο robots.txt δεν θα δουλέψει επειδή υπάρχει μία φυσική ύπαρξη του robots.txt",

	'admin:maintenance_mode:default_message' => 'Η σελίδα βρίσκεται υπό συντήρηση',
	'admin:maintenance_mode:instructions' => 'Η λειτουργία συντήρησης θα πρέπει να χρησιμοποιείται για τις αναβαθμίσεις και άλλες μεγάλες αλλαγές στη σελίδα.
		Όταν είναι ενεργοποιημένη, μόνο οι διαχειριστές μπορούν να συνδεθούν και να περιηγηθούν στη σελίδα.',
	'admin:maintenance_mode:mode_label' => 'Λειτουργία συντήρησης',
	'admin:maintenance_mode:message_label' => 'Το μήνυμα που προβάλλεται στους χρήτες όταν η λειτουργία συντήρησης είναι ενεργή',
	'admin:maintenance_mode:saved' => 'Οι ρυθμίσεις σχετικά με τη λειτουργία συντήρησης αποθηκεύτηκαν.',
	'admin:maintenance_mode:indicator_menu_item' => 'Η σελίδα βρίσκεται σε λειτουργία συντήρησης.',
	'admin:login' => 'Σύνδεση Διαχειριστή',

//###################################################################################
//#                              END OF PART 4                                      #
//###################################################################################

/**
 * User settings
 */
		
	'usersettings:description' => "Ο πίνακας ρυθμίσεων χρήστη σας επιτρέπει να ελέγχετε όλες τις προσωπικές σας ρυθμίσεις, από τη διαχείριση χρήστη, μέχρι και το πως συμπεριφέρονται τα πρόσθετα. Διαλέξτε παρακάτω μια επιλογή για να ξεκινήσετε.",

	'usersettings:statistics' => "Τα στατιστικά στοιχεία σας",
	'usersettings:statistics:opt:description' => "Προβολή στατιστικών πληροφοριών σχετικά με τους χρήστες και τα στοιχεία στην ιστοσελίδα σας.", 
	'usersettings:statistics:opt:linktext' => "Στατιστικά στοιχεία λογαριασμού",

	'usersettings:user' => "Οι ρυθμίσεις του/της %s",
	'usersettings:user:opt:description' => "Σας επιτρέπει να ελέγξετε τις ρυθμίσεις χρήστη.",
	'usersettings:user:opt:linktext' => "Αλλάξτε τις ρυθμίσεις σας",

	'usersettings:plugins' => "Εργαλεία",
	'usersettings:plugins:opt:description' => "Διαμόρφωση ρυθμίσεων (αν υπάρχουν) για τα ενεργά εργαλεία.",
	'usersettings:plugins:opt:linktext' => "Διαμορφώστε τα εργαλεία σας",

	'usersettings:plugins:description' => "Αυτός ο πίνακας ελέγχου σας επιτρέπει να ελέγχετε και να διαμορφώνεται τις προσωπικές σας ρυθμίσεις για εργαλεία που εγκαταστάθηκαν από τον διαχειριστή συστήματος.",
	'usersettings:statistics:label:numentities' => "Το περιεχόμενό σας",

	'usersettings:statistics:yourdetails' => "Οι λεπτομέρειές σας",
	'usersettings:statistics:label:name' => "Πλήρες όνομα",
	'usersettings:statistics:label:email' => "Διεύθυνση ηλ. ταχυδρομείου",
	'usersettings:statistics:label:membersince' => "Μέλος από",
	'usersettings:statistics:label:lastlogin' => "Τελευταία σύνδεση",

/**
 * Activity river
 */
		
	'river:all' => 'Η δραστηριότητα όλης της σελίδας',
	'river:mine' => 'Η δραστηριότητά μου',
	'river:owner' => 'Η δραστηριότητα του/της %s',
	'river:friends' => 'Δραστηριότητα φίλων',
	'river:select' => 'Προβολή %s', 
	'river:comments:more' => '+%u περισσότερα',
	'river:comments:all' => 'Δείτε και τα %u σχόλια',
	'river:generic_comment' => 'σχολίασε σε %s %s',

	'friends:widget:description' => "Προβάλλει κάποιους από τους φίλους σας.",
	'friends:num_display' => "Πλήθος φίλων για προβολή",
	'friends:icon_size' => "Μέγεθος εικονιδίου", 
	'friends:tiny' => "μικροσκοπικό", 
	'friends:small' => "μικρό", 

/**
 * Icons
 */

	'icon:size' => "Μέγεθος εικονιδίου", 
	'icon:size:topbar' => "Πάνω γραμμή εργαλείων", 
	'icon:size:tiny' => "Μικροσκοπικό",
	'icon:size:small' => "Μικρό",
	'icon:size:medium' => "Μεσαίο",
	'icon:size:large' => "Μεγάλο",
	'icon:size:master' => "Πολύ μεγάλο",
		
/**
 * Generic action words
 */

	'save' => "Αποθήκευση",
	'reset' => 'Επαναφορά',
	'publish' => "Δημοσίευση",
	'cancel' => "Ακύρωση",
	'saving' => "Αποθηκεύεται ...",
	'update' => "Ανανέωση",
	'preview' => "Προεπισκόπηση",
	'edit' => "Επεξεργασία",
	'delete' => "Διαγραφή",
	'accept' => "Αποδοχή",
	'reject' => "Απόρριψη",
	'decline' => "Άρνηση",
	'approve' => "Έγκριση",
	'activate' => "Ενεργοποίηση",
	'deactivate' => "Απενεργοποίηση",
	'disapprove' => "Μη αποδοχή", 
	'revoke' => "Ανάκληση",
	'load' => "Φόρτωση",
	'upload' => "Ανέβασμα",
	'download' => "Κατέβασμα",
	'ban' => "Αποκλεισμός",
	'unban' => "Άρση αποκλεισμού",
	'banned' => "Αποκλεισμένος",
	'enable' => "Ενεργοποίηση",
	'disable' => "Απενεργοποίηση",
	'request' => "Αίτηση",
	'complete' => "Ολοκλήρωση", 
	'open' => 'Άνοιγμα',
	'close' => 'Κλείσιμο',
	'hide' => 'Κρύψιμο',
	'show' => 'Προβολή',
	'reply' => "Απάντηση",
	'more' => 'Περισσότερα',
	'more_info' => 'Περισσότερες πληροφορίες',
	'comments' => 'Σχόλια',
	'import' => 'Εισαγωγή',
	'export' => 'Εξαγωγή',
	'untitled' => 'Χωρίς τίτλο',
	'help' => 'Βοήθεια',
	'send' => 'Αποστολή',
	'post' => 'Δημοσίευση',
	'submit' => 'Κατάθεση',
	'comment' => 'Σχολιασμός',
	'upgrade' => 'Αναβάθμιση',
	'sort' => 'Ταξινόμηση',
	'filter' => 'Φιλτράρισμα',
	'new' => 'Δημιουργία νέου/νέας', 
	'add' => 'Προσθήκη',
	'create' => 'Δημιουργία',
	'remove' => 'Αφαίρεση',
	'revert' => 'Επαναφορά',

	'site' => 'Σελίδα',
	'activity' => 'Δραστηριότητα',
	'members' => 'Μέλη',
	'menu' => 'Μενού',

	'up' => 'Πάνω',
	'down' => 'Κάτω',
	'top' => 'Κορυφή',
	'bottom' => 'Τέλος',
	'right' => 'Δεξιά',
	'left' => 'Αριστερά',
	'back' => 'Πίσω',

	'invite' => "Πρόσκληση",

	'resetpassword' => "Επαναφορά κωδικού πρόσβασης",
	'changepassword' => "Αλλαγή κωδικού πρόσβασης",
	'makeadmin' => "Προσθήκη διαχειριστή", 
	'removeadmin' => "Αφαίρεση διαχειριστή",

	'option:yes' => "Ναι",
	'option:no' => "Όχι",

	'unknown' => 'Άγνωστο', 
	'never' => 'Ποτέ',

	'active' => 'Ενεργό', 
	'total' => 'Συνολικά',
	
	'ok' => 'OK',
	'any' => 'Κανένα', 
	'error' => 'Σφάλμα',
	
	'other' => 'Άλλο', 
	'options' => 'Επιλογές',
	'advanced' => 'Για προχωρημένους',

	'learnmore' => "Κάντε κλικ για να μάθετε περισσότερα.",
	'unknown_error' => 'Άγνωστο σφάλμα',

	'content' => "περιεχόμενο",
	'content:latest' => 'Πρόσφατη δραστηριότητα',
	'content:latest:blurb' => 'Εναλλακτικά κάντε κλικ εδώ για να δείτε την πιο πρόσφατη δραστηριότητα σε όλη τη σελίδα.',

	'link:text' => 'προβολή συνδέσμου',
	
/**
 * Generic questions
 */

	'question:areyousure' => 'Είστε σίγουρος/η;',

/**
 * Status
 */

	'status' => 'Κατάσταση', 
	'status:unsaved_draft' => 'Μη αποθηκευμένο προσχέδιο',
	'status:draft' => 'Προσχέδιο',
	'status:unpublished' => 'Αδημοσίευτη',
	'status:published' => 'Δημοσιευμένη',
	'status:featured' => 'Προτεινόμενη', 
	'status:open' => 'Ανοιχτή',
	'status:closed' => 'Κλειστή', 

/**
 * Generic sorts
 */

	'sort:newest' => 'Πρόσφατα', 
	'sort:popular' => 'Δημοφιλή',
	'sort:alpha' => 'Αλφαβητικά',
	'sort:priority' => 'Προτεραιότητα',
		
/**
 * Generic data words
 */

	'title' => "Τίτλος",
	'description' => "Περιγραφή",
	'tags' => "Ετικέτες",
	'all' => "Όλα", 
	'mine' => "Τα δικά μου",

	'by' => 'από',
	'none' => 'κανένα', 

	'annotations' => "Σχολιασμοί",
	'relationships' => "Σχέσεις",
	'metadata' => "Μεταδεδομένα(metadata)", 
	'tagcloud' => "Σύννεφο ετικετών",

	'on' => 'Ανοιχτό', 
	'off' => 'Κλειστό',

/**
 * Entity actions
 */
		
	'edit:this' => 'Επεξεργασία', 
	'delete:this' => 'Διαγραφή', 
	'comment:this' => 'Σχολιασμός',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Είστε σίγουρος/η ότι θέλετε να διαγράψετε αυτό το στοιχείο;", 
	'deleteconfirm:plural' => "Είστε σίγουρος/η ότι θέλετε να διαγράψετε αυτά τα στοιχεία;",
	'fileexists' => "Ένα αρχείο έχει ήδη ανεβεί. Για να το αντικαταστήσετε επιλέξτε το παρακάτω:",

/**
 * User add
 */

	'useradd:subject' => 'Ο λογαριαμός χρήστη δημιουργήθηκε',
	'useradd:body' => '
%s,

Ένας λογαριασμός χρήστη δημιουργήθηκε για εσάς στο %s. Για να συνδεθείτε, επισκεφθείτε το:

%s

Και εισάγετε τα εξής στοιχεία:

Όνομα χρήστη: %s
Κωδικός πρόσβασης: %s

Όταν συνδεθείτε, σας προτείνουμε να αλλάξετε τον κωδικό πρόσβασης σας.
',

/**
 * System messages
 */

	'systemmessages:dismiss' => "κάντε κλικ για παράβλεψη",


/**
 * Import / export
 */
		
	'importsuccess' => "Επιτυχής εισαγωγή δεδομένων",
	'importfail' => "Ανεπιτυχής εισαγωγή δεδομένων τύπου OpenDD.",

/**
 * Time
 */

	'friendlytime:justnow' => "μόλις τώρα",
	'friendlytime:minutes' => "%s λεπτά πριν",
	'friendlytime:minutes:singular' => "πριν ένα λεπτό",
	'friendlytime:hours' => "%s ώρες πριν",
	'friendlytime:hours:singular' => "πριν μία ώρα",
	'friendlytime:days' => "%s μέρες πριν",
	'friendlytime:days:singular' => "χθες",
	'friendlytime:date_format' => 'j F Y @ g:ia', /* # */
	
	'friendlytime:future:minutes' => "σε %s λεπτά",
	'friendlytime:future:minutes:singular' => "σε ένα λεπτό",
	'friendlytime:future:hours' => "σε %s ώρες",
	'friendlytime:future:hours:singular' => "σε μία ώρα",
	'friendlytime:future:days' => "σε %s μέρες",
	'friendlytime:future:days:singular' => "αύριο",

	'date:month:01' => '%s Ιανουαρίου',
	'date:month:02' => '%s Φεβρουαρίου',
	'date:month:03' => '%s Μαρτίου',
	'date:month:04' => '%s Απριλίου',
	'date:month:05' => '%s Μαίου',
	'date:month:06' => '%s Ιουνίου',
	'date:month:07' => '%s Ιουλίου',
	'date:month:08' => '%s Αυγούστου',
	'date:month:09' => '%s Σεπτεμβρίου',
	'date:month:10' => '%s Οκτωβρίου',
	'date:month:11' => '%s Νοεμβρίου',
	'date:month:12' => '%s Δεκεμβρίου',

	'date:weekday:0' => 'Κυριακή',
	'date:weekday:1' => 'Δευτέρα',
	'date:weekday:2' => 'Τρίτη',
	'date:weekday:3' => 'Τετάρτη',
	'date:weekday:4' => 'Πέμπτη',
	'date:weekday:5' => 'Παρασκευή',
	'date:weekday:6' => 'Σάββατο',
	
	'interval:minute' => 'Κάθε λεπτό',
	'interval:fiveminute' => 'Κάθε πέντε λεπτά',
	'interval:fifteenmin' => 'Κάθε δεκαπέντε λεπτά',
	'interval:halfhour' => 'Κάθε μισή ώρα',
	'interval:hourly' => 'Κάθε μία ώρα',
	'interval:daily' => 'Κάθε μέρα',
	'interval:weekly' => 'Κάθε εβδομάδα',
	'interval:monthly' => 'Κάθε μήνα',
	'interval:yearly' => 'Κάθε χρόνο',
	'interval:reboot' => 'Κατά την επανεκκίνηση',



//###################################################################################
//#                              END OF PART 5                                      #
//###################################################################################


/**
 * System settings
 */

	'installation:sitename' => "Το όνομα της ιστοσελίδας σας:",
	'installation:sitedescription' => "Μικρή περιγραφή της ιστοσελίδας σας (προαιρετικό):",
	'installation:wwwroot' => "Ο υπερσύνδεσμος (URL) της ιστοσελίδας:",
	'installation:path' => "Το πλήρες μονοπάτι της εγκατάστασης του Elgg:",
	'installation:dataroot' => "Το πλήρες μονοπάτι του φακέλου δεδομένων (data):", 
	'installation:dataroot:warning' => "Αυτός ο φάκελος πρέπει να δημιουργηθεί χειροκίνητα. Θα πρέπει να είναι σε διαφορετικό φάκελο από αυτόν της εγκατάστασης του Elgg.",
	'installation:sitepermissions' => "Τα προεπιλεγμένα δικαιώματα πρόσβασης:",
	'installation:language' => "Η προεπιλεγμένη γλώσσα για τη ιστοσελίδα σας:",
	'installation:debug' => "Ελέγξτε το πλήθος των πληροφοριών που γράφονται στο αρχείο καταγραφών του εξυπηρετητή.",
	'installation:debug:label' => "Επίπεδο καταγραφής:",
	'installation:debug:none' => 'Απενεργοποίηση καταγραφής (προτείνεται)',
	'installation:debug:error' => 'Καταγραφή μόνο κρίσιμων λαθών',
	'installation:debug:warning' => 'Καταγραφή λαθών και προειδοποιήσεων',
	'installation:debug:notice' => 'Καταγραφή όλων των λαθών, προειδοποιήσεων και ζητημάτων',
	'installation:debug:info' => 'Καταγραφή όλων',

	// Walled Garden support
	'installation:registration:description' => 'Η εγγραφή χρήστη είναι ενεργοποιημένη από προεπιλογή. Απενεργοποιήστε τη αν δεν θέλετε οι χρήστες να μπορούν να εγγραφούν από μόνα τους.',
	'installation:registration:label' => 'Επιτρέψτε την εγγραφή σε όλους τους νέους χρήστες',
	'installation:walled_garden:description' => 'Ενεργοποιήστε για να εμποδίσετε τα μη-μέλη να δούνε τη ιστοσελίδα, εκτός από σελίδες που έχουν σημανθεί ως δημόσιες (όπως η σελίδα σύνδεσης και εγγραφής).',
	'installation:walled_garden:label' => 'Περιορίστε τις σελίδες σε συνδεδεμένους χρήστες',

	'installation:httpslogin' => "Ενεργοποιήστε για τη διεξαγωγή σύνδεσης των χρηστών μέσω πρωτοκόλλου HTTPS. Αυτό απαιτεί έναν εξυπηρετηρή με ενεργοποιημένο HTTPS!",
	'installation:httpslogin:label' => "Ενεργοποιήστε τις συνδέσεις HTTPS",
	'installation:view' => "Εισάγεται την όψη η οποία θα χρησιμοποιηθεί ως η προεπιλεγμένη για την ιστοσελίδα σας ή αφήστε τη κενή για την χρήση της ήδη προεπιλεγμένης. (αν έχετε αμφιβολίες, αφήστε την προεπιλογή):",

	'installation:siteemail' => "Διεύθυνση ηλ. ταχυδρομείου της ιστοσελίδας (χρησιμοποιείται για την αποστολή μηνυμάτων συστήματος):",
	'installation:default_limit' => "Προεπιλεγμένος αριθμός στοιχείων ανά σελίδα",

	'admin:site:access:warning' => "Αυτή είναι η ρύθμιση ασφαλείας που προτείνετε στους χρήστες όταν δημιουργούν νέο περιεχόμενο. Αλλάζοντάς τη, δεν αλλάζει την πρόσβαση στο περιεχόμενο.",
	'installation:allow_user_default_access:description' => "Ενεργοποιήστε για να επιτρέψετε στους χρήστες να ορίσουν τι δικιά τους ρύθμιση ασφαλείας, η οποία παρακάμπτει την προτεινόμενη από το σύστημα.",
	'installation:allow_user_default_access:label' => "Επιτρέψτε στο χρήστη την προεπιλεγμένη πρόσβαση",

	'installation:simplecache:description' => "Η απλή χρήση κρυφής μνήμης (cache) μεγιστοποιεί την απόδοση, κρατώντας στατικό περιεχόμενο που συμπεριλαμβάνει κάποια αρχεία CSS και JavaScript.",
	'installation:simplecache:label' => "Κάντε απλή χρήση κρυφής μνήμης (προτείνεται)",

	'installation:minify:description' => "Η απλή χρήση κρυφής μνήμης μπορεί επίσης να βελτιώσει την απόδοση, συμπιέζοντας αρχεία CSS και JavaScript. (Απαιτεί η απλή χρήση κρυφής μνήμης να είναι ενεργοποιημένη.)",
	'installation:minify_js:label' => "Συμπίεση JavaScript (προτείνεται)",
	'installation:minify_css:label' => "Συμπίεση CSS (προτείνεται)",

	'installation:htaccess:needs_upgrade' => "Πρέπει να ανανεώσετε το αρχείο .htaccess ώστε το μονοπάτι να εγχέεται (inject) στην παράμετρο του GET στο __elgg_uri (μπορείτε να χρησιμοποιήσετε το nstall/config/htaccess.dist ως οδηγό).",
	'installation:htaccess:localhost:connectionfailed' => "Το Elgg δεν μπορεί να συνδεθεί στο ίδιο για να δοκιμάσει τους κανόνες επανεγγραφής σωστά. Ελέγξτε ότι το curl δουλεύει σωστά και ότι δεν υπάρχουν περιορισμοί διευθύνσεων IP που αποτρέπουν τις συνδέσεις του localhost.",
	
	'installation:systemcache:description' => "Η χρήση κρυφής μνήμης από το σύστημα μειώνει το χρόνο φόρτωσης του Elgg, κρατώντας δεδομένα σε αρχεία.",
	'installation:systemcache:label' => "Χρήση κρυφής μνήμης από το σύστημα (προτείνεται)",

	'admin:legend:system' => 'Σύστημα',
	'admin:legend:caching' => 'Χρήση κρυφής μνήμης',
	'admin:legend:content_access' => 'Πρόσβαση Περιεχομένου',
	'admin:legend:site_access' => 'Πρόσβαση Ιστοσελίδας',
	'admin:legend:debug' => 'Αποσφαλμάτωση και Καταγραφή',

	'upgrading' => 'Αναβαθμίζεται...',
	'upgrade:db' => 'Η βάση δεδομένων αναβαθμίστηκε.',
	'upgrade:core' => 'Η εγκατάσταση του Elgg αναβαθμίστηκε.',
	'upgrade:unlock' => 'Ξεκλείδωμα αναβάθμισης',
	'upgrade:unlock:confirm' => "Η βάση δεδομένων είναι κλειδωμένη λόγω άλλης αναβάθμισης. Η ταυτόχρονη πραγματοποίηση αναβαθμίσεων είναι επικίνδυνη. Συνεχίστε μόνο αν ξέρετε ότι δεν υπάρχει και άλλη αναβάθμιση σε εξέλιξη αυτή τη στιγμή. Ξεκλείδωμα;",
	'upgrade:locked' => "Αποτυχία αναβάθμισης. Μία άλλη αναβάθμιση είναι σε εξέλιξη. Για να απερνεργοποιήσετε το κλείδωμα, επισκεφτείτε το τμήμα Διαχειριστή.",
	'upgrade:unlock:success' => "Η αναβάθμιση ξεκλειδώθηκε επιτυχώς.",
	'upgrade:unable_to_upgrade' => 'Αποτυχία αναβάθμισης.',
	'upgrade:unable_to_upgrade_info' =>
		'Αυτή η εγκατάσταση δεν είναι δυνατό να αναβαθμιστεί επειδή στον πυρήνα του Elgg ανιχνεύτηκαν 
		όψεις legacy. Αυτές οι όψεις έχουν καταργηθεί και πρέπει να αφαιρεθούν για να λειτουργήσει σωστά
		το Elgg. Αν δεν έχετε κάνει αλλαγές στον πυρήνα του Elgg, μπορείτε να διαγράψετε τον φάκελο όψεων(views)
		και να τον αντικαταστήσετε με αυτόν του πιο πρόσφατου πακέτου του Elgg. Μπορείτε να κατεβαετε το
		τελευταίο από το <a href="http://elgg.org">elgg.org</a>.<br /><br />

		Αν θέλετε λεπτομερείς οδηγίες, δείτε το <a href="http://learn.elgg.org/en/stable/admin/upgrading.html">
		Εγχειρίδιο Αναβάθμισης του Elgg</a>. Αν θέλετε βοήθεια, αναζητήστε τη στα <a href="http://community.elgg.org/pg/groups/discussion/">Φόρουμ της κοινοτικής υποστήριξης</a>.', 

	'update:twitter_api:deactivated' => 'To Twitter API (προηγουμένως Twitter Service) απενεργοποιήθηκε κατά τη διάρκεια της αναβάθμισης. Παρακαλώ ενεργοποιήστε το χειροκίνητα αν απαιτείται.',
	'update:oauth_api:deactivated' => 'To OAuth API (προηγουμένως OAuth Lib) απενεργοποιήθηκε κατά τη διάρκεια της αναβάθμισης. Παρακαλώ ενεργοποιήστε το χειροκίνητα αν απαιτείται.',
	'upgrade:site_secret_warning:moderate' => "Σας προτρέπουμε να αναγεννήσετε το κλειδί της ιστοσελίδα σας ώστε να βελτιωθεί η ασφάλεια συστήματος. Δείτε: Διαμόρφωση &gt; Ρυθμίσεις &gt; Ρυθμίσεις για προχωρημένους",
	'upgrade:site_secret_warning:weak' => "Σας προτρέπουμε να αναγεννήσετε το κλειδί της ιστοσελίδα σας ώστε να βελτιωθεί η ασφάλεια συστήματος. Δείτε: Διαμόρφωση &gt; Ρυθμίσεις &gt; Ρυθμίσεις για προχωρημένους",


	'deprecated:function' => 'Η μέθοδος %s() παρακάμφθηκε από την %s()',

	'admin:pending_upgrades' => 'Η ιστοσελίδα έχει εκκρεμείς αναβαθμίσεις που συνιστούν την άμμεση προσοχή σας.',
	'admin:view_upgrades' => 'Προβολή αναβαθμίσεων που εκκρεμούν.',
 	'admin:upgrades' => 'Αναβαθμίσεις',
	'item:object:elgg_upgrade' => 'Αναβαθμίσεις ιστοσελίδας',
	'admin:upgrades:none' => 'Η εγκατάστασή σας είναι ενημερωμένη!',

	'upgrade:item_count' => 'Υπάρχουν <b>%s</b> στοιχεία που πρέπει να αναβαθμιστούν.',
	'upgrade:warning' => '<b>Προσοχή:</b> Σε μια μεγάλη ιστοσελίδα, αυτή η αναβάθμιση θα διαρκέσει αρκετή ώρα!',
	'upgrade:success_count' => 'Αναβαθμίστηκαν:',
	'upgrade:error_count' => 'Σφάλματα:',
	'upgrade:river_update_failed' => 'Αποτυχία αναβάθμισης της εισόδου ροής (river entry) για το στοιχείο με αναγνωριστικό (id) %s',
	'upgrade:timestamp_update_failed' => 'Αποτυχία ενημέρωσης των χρονοσφραγίδων (timestamps) για το στοιχείο με αναγνωριστικό (id) %s',
	'upgrade:finished' => 'Η αναβάθμιση ολοκληρώθηκε',
	'upgrade:finished_with_errors' => '<p>Η αναβάθμιση ολοκληρώθηκε με σφάλματα. Ξαναφορτώστε τη σελίδα και προσπαθήστε να ξαναεκτελέσετε την αναβάθμιση.</p></p><br />Αν το σφάλμα υπάρξει ξανά, ελέγξτε το αρχείο καταγραφής του εξυπηρετητή για να δείτε την πιθανή αιτία. Μπορείτε να ψάξετε για βοήθεια στην <a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">Ομάδα Τεχνικής Υποστήριξης</a> στην κοινότητα του Elgg.</p>',

	// Strings specific for the comments upgrade
	'admin:upgrades:comments' => 'Αναβάθμιση σχολίων',
	'upgrade:comment:create_failed' => 'Αποτυχία μετατροπής του σχολίου με αναγνωριστικό (id) %s σε οντότητα.',
	'admin:upgrades:commentaccess' => 'Αναβάθμιση της πρόσβασης σχολίων',

	// Strings specific for the datadir upgrade
	'admin:upgrades:datadirs' => 'Αναβάθμιση του φακέλου δεδομένων (data)',

	// Strings specific for the discussion reply upgrade
	'admin:upgrades:discussion_replies' => 'Αναβάθμιση της απάντησης σε συζήτηση',
	'discussion:upgrade:replies:create_failed' => 'Αποτυχία μετατροπής της απάντησης σε συζήτηση με αναγνωριστικό (id) %s  σε οντότητα.',


//###################################################################################
//#                              END OF PART 6                                      #
//###################################################################################


/**
 * Welcome
 */

	'welcome' => "Καλωσήρθατε",
	'welcome:user' => 'Καλωσήρθες %s',

/**
 * Emails
 */
		
	'email:from' => 'Από',
	'email:to' => 'Προς',
	'email:subject' => 'Θέμα',
	'email:body' => 'Κορμός',
	
	'email:settings' => "Ρυθμίσεις ηλ. ταχυδρομείου",
	'email:address:label' => "Διεύθυνση ηλ. ταχυδρομείου",

	'email:save:success' => "Η νέα διεύθυνση ηλ. ταχυδρομείου αποθηκεύτηκε. Απαιτείται επαλήθευση.",
	'email:save:fail' => "Η νέα διεύθυνση ηλ. ταχυδρομείου δεν μπόρεσε να αποθηκευτεί.",

	'friend:newfriend:subject' => "Ο/Η %s σας πρόσθεσε ως φίλο/η!",
	'friend:newfriend:body' => "Ο/Η %s σας πρόσθεσε ως φίλο/η!

Για να δείτε το προφίλ του/της, κάντε κλικ εδώ:

%s

Παρακαλώ μην απαντάτε σε αυτή τη διεύθυνση ηλ. ταχυδρομείου.",

	'email:changepassword:subject' => "Ο κωδικός πρόσβασης άλλαξε!",
	'email:changepassword:body' => "Γεια σου %s,

Ο κωδικός πρόσβασής σας άλλαξε.",

	'email:resetpassword:subject' => "Επαναφορά κωδικού πρόσβασης!",
	'email:resetpassword:body' => "Γεια σου %s,

Ο κωδικός πρόσβασής σας επαναφέρθηκε σε: %s",

	'email:changereq:subject' => "Αίτηση αλλαγής κωδικού.",
	'email:changereq:body' => "Γεια σου %s,

Κάποιος (από τη διεύθυνση IP %s) ζήτησε αλλαγή κωδικού για το λογαριασμό σας.

Αν ήσασταν εσείς, ακολουθήστε τον παρακάτω σύνδεσμο. Αλλιώς αγνοήστε αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Το προεπιλεγμένο επίπεδο πρόσβασης",
	'default_access:label' => "Προεπιλεγμένη πρόσβαση",
	'user:default_access:success' => "Το νέο προεπιλεγμένο επίπεδο πρόσβασης αποθηκεύτηκε.",
	'user:default_access:failure' => "Το νέο προεπιλεγμένο επίπεδο πρόσβασης δεν ήταν δυνατό να αποθηκευτεί.",

/**
 * Comments
 */

	'comments:count' => "%s σχόλια",
	'item:object:comment' => 'Σχόλια',

	'river:comment:object:default' => 'Ο/Η %s σχολίασε στο %s',

	'generic_comments:add' => "Αφήστε σχόλιο",
	'generic_comments:edit' => "Επεξεργασία σχολίου",
	'generic_comments:post' => "Δημοσίευση σχολίου",
	'generic_comments:text' => "Σχόλιο",
	'generic_comments:latest' => "Πρόσφατα σχόλια",
	'generic_comment:posted' => "Το σχόλιο δημοσιεύθηκε επιτυχώς.",
	'generic_comment:updated' => "Το σχόλιο ενημερώθηκε επιτυχώς.",
	'generic_comment:deleted' => "Το σχόλιο διαγράφτηκε επιτυχώς.",
	'generic_comment:blank' => "Συγνώμη, το σχόλιο πρέπει να έχει περιεχόμενο για να μπορέσει να αποθηκευτεί.",
	'generic_comment:notfound' => "Συγνώμη, το προσδιορισμένο σχόλιο δεν μπόρεσε να βρεθεί.",
	'generic_comment:notfound_fallback' => "Συγνώμη. Δεν μπορέσαμε να βρούμε το συγκεκριμένο σχόλιο, αλλά σας προωθήσαμε στη σελίδα που αυτό έλαβε χώρα.i",
	'generic_comment:notdeleted' => "Συγνώμη, αυτό το σχόλιο δεν ήταν δυνατό να διαγραφεί.",
	'generic_comment:failure' => "Ένα απρόσμενο σφάλμα συνέβει κατά την αποθήκευση του σχόλιου.",
	'generic_comment:none' => 'Κανένα σχόλιο',
	'generic_comment:title' => 'Σχόλιο από τον/την %s',
	'generic_comment:on' => '%s στο %s',
	'generic_comments:latest:posted' => 'Δημοσίευσε ένα',

	'generic_comment:email:subject' => 'Έχετε ένα νέο σχόλιο!',
	'generic_comment:email:body' => "Έχετε ένα νέο σχόλιο στο στοιχείο σας \"%s\" από τον/την %s. It reads:


%s


Για να απαντήσετε ή να δείτε το αρχικό στοιχείο, ακολουθήστε αυτό το σύνδεσμο:

%s

Για να δείτε το profil του/της %s ακολουθήστε αυτό το σύνδεσμο:

%s

Παρακαλώ μην απαντάτε σε αυτό το μήνυμα ηλεκτρονικού ταχυδρομείου.",

/**
 * Entities
 */
	
	'byline' => 'Από τον/την %s',
	'entity:default:strapline' => 'Η %s δημιουργήθηκε από τον/την %s',
	'entity:default:missingsupport:popup' => 'Αυτή η οντότητα δεν μπορεί να προβληθεί σωστά. Αυτό μπορεί να συμβαίνει γιατί απαιτεί υποστήριξη που παρέχεται από κάποιο πρόσθετο που δεν είναι πια εγκατεστημένο.',

	'entity:delete:success' => 'Η οντότητα %s έχει διαγραφεί',
	'entity:delete:fail' => 'Η οντότητα %s ήταν αδύνατο να διαγραφεί',

	'entity:can_delete:invaliduser' => 'Η canDelete δεν μπορεί να ελεγχθεί για το user_guid [%s] καθώς ο χρήστης δεν υπάρχει.',


/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => 'Τα πεδία __token ή __ts λείπουν από τη φόρμα',
	'actiongatekeeper:tokeninvalid' => "Η σελίδα που χρησιμοποιούσατε έληξε. Παρακαλώ προσπαθήστε ξανά.",
	'actiongatekeeper:timeerror' => 'Η σελίδα που χρησιμοποιούσατε έληξε. Παρακαλώ ξαναφορτώστε τη και προσπαθήστε ξανά.',
	'actiongatekeeper:pluginprevents' => 'Η υποβολή αυτής της φόρμας απέτυχε για κάποιο άγνωστο λόγο.',
	'actiongatekeeper:uploadexceeded' => 'Το μέγεθος του/των αρχείου/αρχείων υπερβαίνει το όριο που τέθηκε από τον διαχειριστή της ιστοσελίδας',
	'actiongatekeeper:crosssitelogin' => "Συγνώμη, η σύνδεση από διαθορετικό domain απαγορεύεται. Παρακαλώ προσπαθήστε ξανά.",

/**
 * Word blacklists
 */

	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Ετικέτες',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Αποτυχία επικοινωνίας με %s. Μπορεί να αντιμετωπίσετε προβλήματα κατά την αποθήκευση περιεχομένου. Παρακαλώ ανανεώστε τη σελίδα.',
	'js:security:token_refreshed' => 'Η σύνδεση στο %s αποκαταστάθηκε!',
	'js:lightbox:current' => "εικόνα %s από τις %s",

/**
 * Miscellaneous
 */
	'elgg:powered' => "Powered by Elgg",


//###################################################################################
//#                              END OF PART 7                                      #
//###################################################################################



/**
 * Languages according to ISO 639-1 (με κάποιες εξαιρέσεις)
 */

	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"cmn" => "Mandarin Chinese", // ISO 639-3
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Ελληνικά",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"pt_br" => 'Brazilian Portuguese',
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zu" => "Zulu",

//###################################################################################
//#                              END OF PART 8                                      #
//###################################################################################

);
