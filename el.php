<?php
return array(
/**
 * Sites
 */

	'item:site' => 'Σελίδες',

/**
 * Sessions
 */

	'login' => "Συνδεθείτε",
	'loginok' => "Έχετε συνδεθεί.",
	'loginerror' => "Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε τα στοιχεία σας και ξαναπροσπαθήστε.",
	'login:empty' => "Το όνομα χρήστη/email και ο κωδικός απαιτούνται.",
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
	'actionnotfound' => "Το αρχείο ενέργειας για την %s δεν βρέθηκε.", /* #2 [The action file for %s was not found.] */
	'actionloggedout' => "Συγνώμη, δεν μπορείτε να πραγματοποιήσετε αυτή την ενέργεια όσο είστε συνδεδεμένος.",
	'actionunauthorized' => 'Δεν είστε εξουσιοδοτημένος για να πραγματοποιήσετε αυτή την ενέργεια',

	'PluginException:MisconfiguredPlugin' => "Το %s (guid: %s) είναι ένα πρόσθετο με λάθος ρυθμίσεις και έχει απενεργοποιηθεί. Παρακαλώ ψάξτε στο wiki του Elgg για τις πιθανές αιτίες. (http://docs.elgg.org/wiki/).",
	'PluginException:CannotStart' => 'Το %s (guid: %s) αδυνατεί να ξεκινήσει και απενεργοποιήθηκε. Αιτία: %s',
	'PluginException:InvalidID' => "Το %s είναι ένα μη έγκυρο ID προσθέτου.", 
	'PluginException:InvalidPath' => "Το %s είναι ένα μη έγκυρο μονοπάτι προσθέτου.",
	'PluginException:InvalidManifest' => 'Μη έγκυρο αρχείο δήλωσης (manifest) για το πρόσθετο %s', 
	'PluginException:InvalidPlugin' => 'Το %s είναι ένα μη έγκυρο πρόσθετο.',
	'PluginException:InvalidPlugin:Details' => 'Το %s είναι ένα μη έγκυρο πρόσθετο: %s',
	'PluginException:NullInstantiated' => 'Το ElggPlugin δεν μπορεί να αρχικοποιηθεί με την τιμή null. Πρέπει να δώσετε ένα GUID, ένα ID προσθέτου, ή ένα πλήρες μονοπάτι.', 
	'ElggPlugin:MissingID' => 'Το ID του προσθέτου (guid %s) απουσιάζει',
	'ElggPlugin:NoPluginPackagePackage' => 'Απουσία ElggPluginPackage για το πρόσθετο με ID %s (guid %s)', 
	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Το απαιτούμενο αρχείο "%s" απουσιάζει.',
	'ElggPluginPackage:InvalidPlugin:InvalidId' => 'Ο φάκελος αυτού του πρόσθετου πρέπει να μετονομαστεί σε "%s" για να ταιριάζει με το ID του στο αρχείο δήλωσης(manifest).',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Το αρχείο δήλωσης(manifest) περιλαμβάνει ένα μη έγκυρο είδος εξάρτησης "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Το αρχείο δήλωσης (manifest) περιλαμβάνει ένα μη έγκυρο "%s" τύπο παρόχου. (Its manifest contains an invalid provides type "%s".)', /* #1 [invalid provides]*/
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Υπάρχει μία μη έγκυρη %s εξάρτηση "%s" στο πρόσθετο %s. Τα πρόσθετα δεν μπορούν να απαιτούν ή να έρχονται σε σύγκρουση με πληροφορία που τα ίδια παρέχουν!', 
	'ElggPlugin:Exception:CannotIncludeFile' => 'Το %s δεν μπορεί να περιληφθεί για το πρόσθετο %s (guid: %s) στο %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Ο φάκελος \"views\" δεν μπορεί να ανοιχτεί για το πρόσθετο %s (guid: %s) στο %s',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Η καταχώρηση γλωσσών για το πρόσθετο %s (guid: %s) στο %s είναι αδύνατη.', /* #2 [Cannot register languages for plugin %s (guid: %s) at %s.]*/
	'ElggPlugin:Exception:NoID' => 'Το ID για το πρόσθετο με guid %s δεν βρέθηκε!', /* #2 [No ID for plugin guid %s!] */
	'PluginException:NoPluginName' => "Το όνομα του πρόσθετου δεν μπόρεσε να εντοπιστεί",
	'PluginException:ParserError' => 'Υπήρξε σφάλμα όταν έγινε προσπάθεια να διατρεχτεί το manifest με την έκδοση %s του API στο πρόσθετο %s' /* #2 [Error parsing manifest with API version %s in plugin %s.] */,
	'PluginException:NoAvailableParser' => 'Δεν μπόρεσε να βρεθεί κάποιος parser για το αρχείο δήλωσης (manifest) στην έκδοση API %s στο πρόσθετο %s.', /* #1 [Cannot find a parser for manifest API version %s in plugin %s.](parser:πρόγραμμα ανάλυσης, διατρέχον πρόγραμμα) (Λογικά το σωστό string στα Αγγλικά είναι "Cannot Find a parser for manifest by  API version %s in plugin %s." */
	'PluginException:ParserErrorMissingRequiredAttribute' => "Το απαιτούμενο attribute '%s' λείπει από το αρχείο δήλωσης (manifest) για το πρόσθετο %s.", /* #1 [attribute]:(χαρακτηριστικό)? */
	'ElggPlugin:InvalidAndDeactivated' => 'Το %s είναι μη έγκυρο πρόσθετο και έχει απενεργοποιηθεί.',

	'ElggPlugin:Dependencies:Requires' => 'Απαιτεί',
	'ElggPlugin:Dependencies:Suggests' => 'Προτείνει',
	'ElggPlugin:Dependencies:Conflicts' => 'Συγκρούεται',/* #2 conflicts*/
	'ElggPlugin:Dependencies:Conflicted' => 'Σε σύγκρουση',
	'ElggPlugin:Dependencies:Provides' => 'Παρέχει',
	'ElggPlugin:Dependencies:Priority' => 'Προτεραιότητα',

	'ElggPlugin:Dependencies:Elgg' => 'Έκδοση Elgg',
	'ElggPlugin:Dependencies:PhpVersion' => 'Έκδοση PHP',
	'ElggPlugin:Dependencies:PhpExtension' => 'Επέκταση PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'Αρχική ρύθμιση PHP: %s', /* #2 [PHP ini setting] */
	'ElggPlugin:Dependencies:Plugin' => 'Πρόσθετο: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Μετά το %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Πριν το %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => 'Το %s δεν είναι εγκατεστημένο',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Λείπει',
	
	'ElggPlugin:Dependencies:ActiveDependent' => 'Υπάρχουν και άλλα πρόσθετα που καταγράφουν το %s ως εξάρτηση. Πρέπει να απενεργοποιήσετε τα ακόλουθα πρόσθετα πριν απενεργοποιήσετε αυτό: %s', /* #2 [There are other plugins that list %s as a dependency.] {[list]:( κατατάσσουν? κατηγοριοποιούν?)} */


	'RegistrationException:EmptyPassword' => 'Τα πεδία εισαγωγής κωδικού δεν μπορούν να είναι κενά',
	'RegistrationException:PasswordMismatch' => 'Οι κωδικοί πρέπει να είναι ίδιοι',
	'LoginException:BannedUser' => 'Έχετε αποκλειστεί από αυτή τη σελίδα και δεν μπορείτε να συνδεθείτε',
	'LoginException:UsernameFailure' => 'Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε το όνομα χρήστη/email και τον κωδικό πρόσβασης.',
	'LoginException:PasswordFailure' => 'Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε το όνομα χρήστη/email και τον κωδικό πρόσβασης.',
	'LoginException:AccountLocked' => 'Ο λογαριασμός σας κλειδώθηκε λόγω πολλαπλών αποτυχημένων προσπαθειών σύνδεσης.',
	'LoginException:ChangePasswordFailure' => 'Η επαλήθευση του κωδικού πρόσβασης απέτυχε.',
	'LoginException:Unknown' => 'Η σύνδεση απέτυχε λόγω άγνωστου σφάλματος.',

	'deprecatedfunction' => 'Προσοχή: Αυτός ο κώδικας χρησιμοποιεί την παρωχημένη συνάρτηση \'%s\' που δεν είναι συμβατή με αυτή την έκδοση του Elgg',

	'pageownerunavailable' => 'Προσοχή: Ο ιδιοκτήτης %d της σελίδας δεν μπορεί να προβληθεί!',
	'viewfailure' => 'Υπήρξε εσωτερικό σφάλμα κατά την προβολή %s', /* #2 [There was an internal failure in the view %s] */
	'view:missing_param' => "Η απαιτούμενη παράμετρος '%s' απουσιάζει από την προβολή %s", /* #2 [The required parameter '%s' is missing in the view %s] */
	'changebookmark' => 'Παρακαλώ αλλάξτε τον σελιδοδείκτη σας για αυτή τη σελίδα',
	'noaccess' => 'Το περιεχόμενο που ζητήσατε έχει αφαιρεθεί ή δεν έχετε δικαίωμα να το δείτε.',
	'error:missing_data' => 'Το αίτημά σας περιείχε ελλιπείς πληροφορίες',
	'save:fail' => 'Αποτυχία αποθήκευσης των δεδομένων σας',
	'save:success' => 'Τα δεδομένα σας αποθηκεύτηκαν',

	'error:default:title' => 'Ουπς...',
	'error:default:content' => 'Ουπς... κάτι πήγε στραβά.',
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

	'name' => "Εμφανιζόμενο όνομα",
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
	'access:help' => "Επίπεδο πρόσβασης", /* #2 [The access level] */
	'access:read' => "Δικαίωμα  ανάγνωσης", /* #1 [Read access] */
	'access:write' => "Δικαίωμα εγγραφής", /* #12 [Write access] */
	'access:admin_only' => "Μόνο διαχειριστές",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Πίνακας ελέγχου", /* #2 [Dashboard] */
	'dashboard:nowidgets' => "Ο πίνακας ελέγχου σας επιτρέπει να παρακολουθείτε τη δραστηριότητα που σας ενδιαφέρει σε αυτή τη σελίδα.", /* #2 (...τη δραστηριότητα και το περιεχόμενο που...) */

	'widgets:add' => 'Προσθήκη widget', /* #2 [widget]:(Θα μεταφραστεί;) */
	'widgets:add:description' => "Κάντε κλικ σε οποιοδήποτε widget από τα παρακάτω για να το προσθέσετε στη σελίδα.", /* #12 [widget] */
	'widgets:position:fixed' => '(Σταθερή θέση στη σελίδα)',
	'widget:unavailable' => 'Έχετε ήδη προσθέσει αυτό το widget', /* #12 [widget] */
	'widget:numbertodisplay' => 'Πλήθος στοιχείων για προβολή', 

	'widget:delete' => 'Αφαίρεση του %s',
	'widget:edit' => 'Προσαρμόστε αυτό το widget', /* #12 [widget] */

	'widgets' => "Widgets", /* #12 [widget] */
	'widget' => "Widget", /* #12 [widget] */
	'item:object:widget' => "Widgets", /* #12 [widget] */
	'widgets:save:success' => "Το widget αποθηκεύτηκε επιτυχώς.", /* #12 [widget] */
	'widgets:save:failure' => "Το widget δεν μπόρεσε να αποθηκευτεί.", /* #12 [widget] */
	'widgets:add:success' => "Το widget προστέθηκε με επιτυχία.", /* #12 [widget] */
	'widgets:add:failure' => "Το widget δεν μπόρεσε να προστεθεί.", /* #12 [widget] */
	'widgets:move:failure' => "Η νέα θέση του widget δεν μπόρεσε να αποθηκευτεί.", /* #12 [widget] */
	'widgets:remove:failure' => "Αδυναμία αφαίρεσης του widget", /* #12 [widget] */

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
	'friends:of:none:you' => "Δεν σας έχει προσθέσει κανένας χρήστης ως φίλο. Για να σας βρούνε άλλοι χρήστες, αρχίστε να εμπλουτίζετε το προφίλ σας.",

	'friends:of:owned' => "Άτομα που πρόσθεσαν ως φίλο τον/την %s",

	'friends:of' => "Φίλοι του/της",
	'friends:collections' => "Ομάδες φίλων", /* #2 [Friend collections]:(ομάδες φίλων)? */
	'collections:add' => "Νέα ομάδα",
	'friends:collections:add' => "Νέα ομάδα φίλων",
	'friends:addfriends' => "Επιλέξτε φίλους",
	'friends:collectionname' => "Όνομα ομάδας",
	'friends:collectionfriends' => "Φίλοι στην ομάδα",
	'friends:collectionedit' => "Επεξεργασία αυτής της ομάδας",
	'friends:nocollections' => "Προς το παρόν δεν έχετε δημιουργήσει κάποια ομάδα.",
	'friends:collectiondeleted' => "Η ομάδα σας διαγράφτηκε.",
	'friends:collectiondeletefailed' => "Αδυναμία διαγραφής αυτής της ομάδας. Είτε δεν έχετε το δικαίωμα, είτε υπήρξε κάποιο άλλο πρόβλημα.",
	'friends:collectionadded' => "Η ομάδα σας δημιουργήθηκε επιτυχώς",
	'friends:nocollectionname' => "Πρέπει να δώσετε ένα όνομα στην ομάδα σας για να δημιουργηθεί.",
	'friends:collections:members' => "Μέλη ομάδας",
	'friends:collections:edit' => "Επεξεργασία ομάδας",
	'friends:collections:edited' => "Αποθηκευμένη ομάδα",
	'friends:collection:edit_failed' => 'Η ομάδα δεν μπόρεσε να αποθηκευτεί.',

	'friendspicker:chararray' => 'ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩ', /* #8888 */

	'avatar' => 'Avatar', /* #1 [avatar]: (να το μεταφράσουμε σε "Εικόνα χρήστη" για παράδειγμα ή να το αφήσουμε έτσι?) */
	'avatar:noaccess' => "Δεν μπορείτε να επεξεργαστείτε το avatar αυτού του χρήστη",
	'avatar:create' => 'Δημιουργία avatar',
	'avatar:edit' => 'Επεξεργασία avatar',
	'avatar:preview' => 'Προεπισκόπηση',
	'avatar:upload' => 'Ανέβασμα νέου avatar',
	'avatar:current' => 'Τρέχον avatar',
	'avatar:remove' => 'Ορισμός του προεπιλεγμένου avatar',
	'avatar:crop:title' => 'Εργαλείο περικοπής avatar',
	'avatar:upload:instructions' => "Το avatar προβάλλεται σε ολόκληρη την ιστοσελίδα. Μπορείτε να το αλλάζετε όσο συχνά επιθυμείτε. (Αποδεκτοί τύποι αρχείων: GIF, JPG ή PNG)",
	'avatar:create:instructions' => 'Κάντε κλικ και σύρτε παρακάτω ένα τετράγωνο που ταιριάζει με το πως θέλετε να περικοπεί το avatar σας. Μία προεπισκόπηση θα εμφανιστεί στο πλαίσιο δεξιά. Όταν σας ικανοποιήσει το αποτέλεσμα, κάντε κλικ στο κουμπί \'Δημιουργία avatar\'. Η περικομμένη έκδοση θα χρησιμοποιείται σε όλη την ιστοσελίδα ως το avatar σας.', /* #2 (μικρογραφία αντί για περικομμένη έκδοση) */
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
	'profile:contactemail' => "Email επικοινωνίας",
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
	'profile:editdefault:delete:fail' => 'Αποτυχία διαγραφής πεδίου προφίλ',
	'profile:editdefault:delete:success' => 'Το πεδίο προφίλ διαγράφτηκε',
	'profile:defaultprofile:reset' => 'Τα πεδία προφίλ επαναφέρθηκαν στις προεπιλογές συστήματος',
	'profile:resetdefault' => 'Επαναφορά των πεδίων προφίλ στις προεπιλογές συστήματος',
	'profile:resetdefault:confirm' => 'Είστε σίγουρος ότι θέλετε να διαγράψετε τα προσαρμοσμένα πεδία προφίλ;',
	'profile:explainchangefields' => "Μπορείτε να αντικαταστήσετε τα υπάρχοντα πεδία προφίλ με δικά σας, συμπληρώνοντας την παρακάτω φόρμα. \n\n Δώστε έναν τίτλο στο νέο πεδίο (πχ. \'Αγαπημένη ομάδα\'), επιλέξτε τον τύπο του πεδίου (πχ. Κείμενο, Υπερσύνδεσμος, Ετικέτες) και κάντε κλικ στο κουμπί 'Προσθήκη'. Για να αναδιατάξετε τα πεδία, σύρτε τα από την περιοχή δίπλα στον τίτλο. Για να επεξεργαστείτε ένα πεδίο, κάντε κλικ στο κείμενο της ετικέτας. \n\n Μπορείτε να επαναφέρετε τις αρχικές ρυθμίσεις προφίλ οποιαδήποτε στιγμή το θελήσετε, αλλά θα χάσετε οποιαδήποτε πληροφορία έχει εισαχθεί στα προσαρμοσμένα πεδία.", /* #8888 The whole code-block */
	'profile:editdefault:success' => 'Προστέθηκε επιτυχώς ένα νέο πεδίο προφίλ',
	'profile:editdefault:fail' => 'Το προκαθορισμένο προφίλ δεν μπόρεσε να αποθηκευτεί.', /* #2 [Default profile could not be saved](προεπιλεγμένο) */
	'profile:field_too_long' => 'Οι πληροφορίες προφίλ δεν μπορούν να αποθηκευτούν καθώς το τμήμα "%s" είναι υπερβολικά μεγάλο.',
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
	'river' => "Ροή ειδήσεων", /* #2 [River]:(ροή/ροή ειδήσεων) (θα μπορούσαμε να το ονομάσουμε και αρχική) */
	'river:friend:user:default' => "Ο/Η %s έγινε φίλος/η με τον/την %s",
	'river:update:user:avatar' => 'Ο/Η %s άλλαξε το avatar του/της',
	'river:update:user:profile' => 'Ο/Η %s ανανέωσε το προφίλ του/της',
	'river:noaccess' => 'Δεν έχετε δικαίωμα προβολής αυτού του περιεχομένου.',
	'river:posted:generic' => 'Ο/Η %s δημοσίευσε', /* #8888 */
	'riveritem:single:user' => 'ένας χρήστης',
	'riveritem:plural:user' => 'κάποιοι χρήστες',
	'river:ingroup' => 'στην ομάδα %s',
	'river:none' => 'Καμία δραστηριότητα',
	'river:update' => 'Ενημέρωση για %s', /* #8888 */
	'river:delete' => 'Αφαιρέστε αυτή τη δραστηριότητα', /* #2 (...αυτό το αντικείμενο δραστηριότητας) */
	'river:delete:success' => 'Το αντικείμενο αφαιρέθηκε από τη Ροή ειδήσεων', /* #2 (Η δραστηριότητα...) */
	'river:delete:fail' => 'Το αντικείμενο δεν μπόρεσε να αφαιρεθεί από τη Ροή ειδήσεων', /* #2 (Η δραστηριότητα...) */
	'river:subject:invalid_subject' => 'Μη έγκυρος χρήστης',
	'activity:owner' => 'Προβολή δραστηριότητας',

	'river:widget:title' => "Δραστηριότητα",
	'river:widget:description' => "Προβολή πρόσφατης δραστηριότητας",
	'river:widget:type' => "Είδος δραστηριότητας",
	'river:widgets:friends' => 'Δραστηριότητα φίλων',
	'river:widgets:all' => 'Δραστηριότητα όλης της σελίδας',

/**
 * Notifications
 */
	'notifications:usersettings' => "Ρυθμίσεις ειδοποιήσεων",
	'notification:method:email' => 'Ηλεκτρονικό ταχυδρομείο',

	'notifications:usersettings:save:ok' => "Οι ρυθμίσεις ειδοποιήσεων αποθηκεύτηκαν επιτυχώς.",
	'notifications:usersettings:save:fail' => "Υπήρξε πρόβλημα κατά την αποθήκευση των ρυθμίσεων ειδοποίησης.",

	'notification:subject' => 'Ειδοποίηση για %s',
	'notification:body' => 'Προβολή νέας δραστηριότητας σε %s',

/**
 * Search
 */

	'search' => "Αναζήτηση",
	'searchtitle' => "Αναζήτηση: %s",
	'users:searchtitle' => "Αναζήτηση χρηστών: %s",
	'groups:searchtitle' => "Αναζήτηση ομάδων: %s",
	'advancedsearchtitle' => "%s με τα αποτελέσματα να αντιστοιχούν σε %s", /* #8888 [%s with results matching %s]*/
	'notfound' => "Δεν βρέθηκαν αποτελέσματα.",
	'next' => "Επόμενο",
	'previous' => "Προηγούμενο",

	'viewtype:change' => "Αλλαγή τύπου κατηγοριοποίησης",
	'viewtype:list' => "Προβολή λίστας",
	'viewtype:gallery' => "Συλλογή", /* #2 [Gallery] */

	'tag:search:startblurb' => "Αντικείμενα με αντίστοιχες ετικέτες '%s':", /* #2 [Items with tags matching '%s':](αντιστοιχες/σχετικες) */

	'user:search:startblurb' => "Σχετικοί χρήστες'%s':", /*[Users matching '%s':]*/
	'user:search:finishblurb' => "Για να δείτε περισσότερα, κάντε κλικ εδώ.",

	'group:search:startblurb' => "Σχετικές ομάδες '%s':", /*[Groups matching '%s':]*/
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
	'registerok' => "Έγγραφήκατε επιτυχώς για %s.", /* #8888 */
	'registerbad' => "Η εγγραφή σας απέτυχε λόγω κάποιου άγνωστου προβλήματος.",
	'registerdisabled' => "Η εγγραφή απενεργοποιήθηκε από τον διαχειριστή του συστήματος",
	'register:fields' => 'Απαιτούνται όλα τα πεδία',

	'registration:notemail' => 'Η διεύθυνση ηλ. ταχυδρομείου που παρείχατε φαίνεται πως είναι μη έγκυρη.',
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
	'adduser:ok' => "Προσθέσατε επιτυχώς νέο χρήστη.", /* #8888 (Προσθέσατε επιτυχώς το χρήστη */
	'adduser:bad' => "Ο νέος χρήστης δεν μπόρεσε να δημιουργηθεί.",

	'user:set:name' => "Ρυθμίσεις ονόματος λογαριασμού",
	'user:name:label' => "Εμφανιζόμενο όνομα",
	'user:name:success' => "To εμφανιζόμενο όνομα αλλάχτηκε επιτυχώς στο σύστημα.",/* #2 (Αφαίρεση του string "στο σύστημα") */
	'user:name:fail' => "Αποτυχία αλλαγής του εμφανιζόμενου ονόματος στο σύστημα.",/* #2 (Αφαίρεση του string "στο σύστημα") */

	'user:set:password' => "Κωδικός πρόσβασης λογαριασμού",
	'user:current_password:label' => 'Τρέχον κωδικός',
	'user:password:label' => "Νέος κωδικός",
	'user:password2:label' => "Νέος κωδικός ξανά",
	'user:password:success' => "Ο κωδικός αλλάχτηκε",
	'user:password:fail' => "Αδυναμία αλλαγής κωδικού στο σύστημα.", /* #2 (Αφαίρεση του string "στο σύστημα") */
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
	'user:password:changereq:success' => 'Κατατέθηκε επιτυχώς αίτημα ανάκτησης κωδικού. Σας έχει σταλεί μήνυμα ηλ. ταχυδρομείου',
	'user:password:changereq:fail' => 'Αδυναμία αίτησης απόκτησης νέου κωδικού.',

	'user:password:text' => 'Για να ζητήσετε νέο κωδικό, εισάγετε το όνομα χρήστη ή τη διεύθυνση ηλ. ταχυδρομείου και κάντε κλικ στο κουμπί κατάθεσης του αιτήματος.', /* #2 #8888 [Request button] */

	'user:persistent' => 'Να με θυμάσαι',

	'walled_garden:welcome' => 'Καλωσήρθατε στο', /* #8888 */


//###################################################################################
//#                              END OF PART 2                                      #
//###################################################################################



/**
 * Administration
 */
	'menu:page:header:administer' => 'Διαχείριση',
	'menu:page:header:configure' => 'Διαμόρφωση',
	'menu:page:header:develop' => 'Ανάπτυξη',
	'menu:page:header:default' => 'Άλλο', /* #2 */

	'admin:view_site' => 'Προβολή σελίδας',
	'admin:loggedin' => 'Συνδεδεμένος/η ως %s',
	'admin:menu' => 'Μενού',

	'admin:configuration:success' => "Οι ρυθμίσεις σας αποθηκεύτηκαν.",
	'admin:configuration:fail' => "Οι ρυθμίσεις σας δεν μπόρεσαν να αποθηκευτούν.",
	'admin:configuration:dataroot:relative_path' => 'Το "%s" δεν μπορεί να οριστεί ως dataroot γιατί δεν είναι απόλυτο μονοπάτι.',/* #1 [dataroot] */

	'admin:unknown_section' => 'Μη έγκυρο τμήμα διαχειριστή.',

	'admin' => "Διαχείριση",
	'admin:description' => "Ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε όλες τις πτυχές του συστήματος· από τη διαχείριση χρηστών μέχρι τη συμπεριφορά τον πρόσθετων. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",

	'admin:statistics' => "Στατιστικά",
	'admin:statistics:overview' => 'Επισκόπηση',
	'admin:statistics:server' => 'Πληροφορίες Εξυπηρετητή',
	'admin:statistics:cron' => 'Cron',
	'admin:cron:record' => 'Πρόσφατες (δι)εργασίες Cron', /* #2 [Latest Cron Jobs] */
	'admin:cron:period' => 'Περίοδος Cron', /* #2 [Cron period] */
	'admin:cron:friendly' => 'Ολοκληρώθηκε τελευταία',
	'admin:cron:date' => 'Ημερομηνία και ώρα',

	'admin:appearance' => 'Εμφάνιση',
	'admin:administer_utilities' => 'Βοηθήματα', /* #2 [Utilities]:(Βοηθήματα) */
	'admin:develop_utilities' => 'Βοηθήματα', /* #2 [Utilities]:(Βοηθήματα) */
	'admin:configure_utilities' => 'Βοηθήματα', /* #2 [Utilities]:(Βοηθήματα) */
	'admin:configure_utilities:robots' => 'Robots.txt', 

	'admin:users' => "Χρήστες",
	'admin:users:online' => 'Συνδεδεμένοι',
	'admin:users:newest' => 'Πρόσφατοι',
	'admin:users:admins' => 'Διαχειριστές',
	'admin:users:add' => 'Προσθήκη νέου χρήστη',
	'admin:users:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε τις ρυθμίσεις χρήστη για τη σελίδα σας. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",
	'admin:users:adduser:label' => "Κάντε κλικ εδώ για προσθήκη νέου χρήστη...",
	'admin:users:opt:linktext' => "Τροποποίηση χρηστών...",
	'admin:users:opt:description' => "Τροποποίηση χρηστών και πληροφοριών λογαριασμών. ",
	'admin:users:find' => 'Αναζήτηση',

	'admin:administer_utilities:maintenance' => 'Λειτουργία συντήρησης',
	'admin:upgrades' => 'Αναβαθμίσεις',

	'admin:settings' => 'Ρυθμίσεις',
	'admin:settings:basic' => 'Βασικές Ρυθμίσεις',
	'admin:settings:advanced' => 'Ρυθμίσεις για προχωρημένους', /* #2 (Για προχωρημένους) */
	'admin:site:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή σας επιτρέπει να ελέγχετε τις καθολικές ρυθμίσεις χρήστη για τη σελίδα σας. Για να ξεκινήσετε, επιλέξτε μία από τις παρακάτω επιλογές.",
	'admin:site:opt:linktext' => "Τροποιποίηση σελίδας...",
	'admin:settings:in_settings_file' => 'Αυτή η ρύθμιση έχει καθοριστεί στο αρχείο settings.php', /* #2 [This setting is configured in settings.php] */

	'admin:legend:security' => 'Ασφάλεια',
	'admin:site:secret:intro' => 'Το Elgg χρησιμοποιεί ένα \'κλειδί\' για να παράγει κωδικούς ασφαλείας(tokens) για διάφορους σκοπούς.', /* #1 [tokens] */
	'admin:site:secret_regenerated' => "Το κρυφό \'κλειδί\' της σελίδας σας ξαναπαράχθηκε.",/* #12 + #2 [Your site secret has been regenerated.] (ξαναγεννήθηκε, ξαναδημιουργήθηκε) */
	'admin:site:secret:regenerate' => "Παραγωγή κρυφού \'κλειδιού\' για τη σελίδας", /* #12 */
	'admin:site:secret:regenerate:help' => "Σημείωση: Ξαναπαράγωντας το κρυφό \'κλειδί\' της σελίδας, μπορεί να προκαλέσετε δυσαρέσκεια σε κάποιους χρήστες, καθιστώντας μη έγκυρους τους κωδικούς ασφαλείας(tokens) που χρησιμοποιούνται στα cookies τύπου \"Να με θυμάσαι\", στα αιτήματα επαλήθευσης διευθύνσεων ηλ. ταχυδρομείου κλπ.",
	'site_secret:current_strength' => 'Δύναμη \'κλειδιού\'',
	'site_secret:strength:weak' => "Ασθενές",
	'site_secret:strength_msg:weak' => "Σας προτείνουμε ένθερμα να ξαναδημιουργήσετε το κρυφό \'κλειδί\' της σελίδας σας.",
	'site_secret:strength:moderate' => "Μέτριο",
	'site_secret:strength_msg:moderate' => "Σας προτείνουμε για μεγαλύτερη ασφάλεια να ξαναδημιουργήσετε το κρυφό \'κλειδί\' της σελίδας σας.",
	'site_secret:strength:strong' => "Δυνατό",
	'site_secret:strength_msg:strong' => "Το κρυφό \'κλειδί\' της σελίδας σας είναι επαρκώς δυνατό. Δεν υπάρχει λόγος να το ξαναδημιουργήσετε.",

	'admin:dashboard' => 'Πίνακας Ελέγχου',
	'admin:widget:online_users' => 'Συνδεδεμένοι χρήστες',
	'admin:widget:online_users:help' => 'Απαριθμεί τους τρέχοντα συνδεδεμένους χρήστες',
	'admin:widget:new_users' => 'Νέοι χρήστες',
	'admin:widget:new_users:help' => 'Απαριθμεί τους νεότερους χρήστες',
	'admin:widget:banned_users' => 'Αποκλεισμένοι χρήστες',
	'admin:widget:banned_users:help' => 'Απαριθμεί τους αποκλεισμένους χρήστες',
	'admin:widget:content_stats' => 'Στατιστικά περιεχομένου',
	'admin:widget:content_stats:help' => 'Παρακολουθείστε το περιεχόμενο που δημιουργούν οι χρήστες σας',
	'widget:content_stats:type' => 'Τύπος περιεχομένου',
	'widget:content_stats:number' => 'Αριθμός',

	'admin:widget:admin_welcome' => 'Καλωσήρθατε',
	'admin:widget:admin_welcome:help' => "Μια σύντομη εισαγωγή στην περιοχή διαχείρισης του Elgg", /* #2 (ή τμήμα διαχείρισης */
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
	'admin:widget:admin_welcome:outro' => '<br />Σιγουρευτείτε ότι είδατε τους διαθέσιμους πόρους μέσω των συνδέσμων στο κάτω μέρος της σελίδας. Ευχαριστούμε που χρησιμοποιείτε το Elgg!',/* #2 (πόρους πληροφορίας) */

	'admin:widget:control_panel' => 'Πίνακας Ελέγχου',
	'admin:widget:control_panel:help' => "Παρέχει εύκολη πρόσβαση σε συνηθισμένες ρυθμίσεις",

	'admin:cache:flush' => 'Εκκαθάριση της προσωρινής μνήμης(cache)',
	'admin:cache:flushed' => "Η προσωρινή μνήμη(cache) της σελίδας εκκαθαρίστηκε",

	'admin:footer:faq' => 'Συχνές ερωτήσεις σχετικά με τη διαχείριση',
	'admin:footer:manual' => 'Εγχειρίδιο διαχείρισης',
	'admin:footer:community_forums' => 'Τα φόρουμ της κοινότητας του Elgg',/* #2 (να αφήσουμε στα Αγγλικά τη λέξη Forum?) */
	'admin:footer:blog' => 'Ιστολόγιο του Elgg',

	'admin:plugins:category:all' => 'Όλα τα πρόσθετα',
	'admin:plugins:category:active' => 'Ενεργά πρόσθετα',
	'admin:plugins:category:inactive' => 'Ανενεργά πρόσθετα',
	'admin:plugins:category:admin' => 'Διαχείριση', /* #2 [Admin]*/
	'admin:plugins:category:bundled' => 'Ομαδοποιημένα', /* #1 [Bundled] */
	'admin:plugins:category:nonbundled' => 'Μη-ομαδοποιημένα',  #1 [Non-bundled] */
	'admin:plugins:category:content' => 'Περιεχόμενο',
	'admin:plugins:category:development' => 'Ανάπτυξη',
	'admin:plugins:category:enhancement' => 'Enhancements',
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

	'plugins:disabled' => 'Τα πρόσθετα δεν φορτώνονται επειδή υπάρχει ένα αρχείο με το όνομα "disabled" στο φάκελο mod.', /* #1 [Plugins are not being loaded because a file named "disabled" is in the mod directory.] */
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
	'admin:plugins:description' => "Αυτός ο πίνακας ελέγχου διαχειριστή επιτρέπει τον έλεγχο και configure των εγκατεστημένων εργαλείων στη σελίδα σας.", /*333*/
	'admin:plugins:opt:linktext' => "Διαμόρφωση εργαλείων...", /* #12 */
	'admin:plugins:opt:description' => "Διαμορφώστε τα εργαλεία που έχουν εγκατασταθεί στη σελίδα. ", /* #12 */
	'admin:plugins:label:author' => "Συγγραφέας",/* #2 [Author] */
	'admin:plugins:label:copyright' => "Πνευματικό δικαίωμα",/* #2 (πνευματικά δικαιώματα) */
	'admin:plugins:label:categories' => 'Κατηγορίες',
	'admin:plugins:label:licence' => "Άδεια", /*2 (άδεια χρήσης) */
	'admin:plugins:label:website' => "Υπερσύνδεσμος", 
	'admin:plugins:label:repository' => "Κώδικας",
	'admin:plugins:label:bugtracker' => "Αναφορά προβλήματος",
	'admin:plugins:label:donate' => "Δωρεά",/* [Donate] */
	'admin:plugins:label:moreinfo' => 'περισσότερες πληροφορίες',
	'admin:plugins:label:version' => 'Έκδοση',
	'admin:plugins:label:location' => 'Τοποθεσία',
	'admin:plugins:label:contributors' => 'Συντελεστές',/* #2 [Contributors] */
	'admin:plugins:label:contributors:name' => 'Όνομα',
	'admin:plugins:label:contributors:email' => 'Διεύθυνση ηλ. ταχυδρομείου',
	'admin:plugins:label:contributors:website' => 'Ιστοσελίδα',
	'admin:plugins:label:contributors:username' => 'Όνομα χρήστη στην κοινότητα',/* #2 [Community username] */
	'admin:plugins:label:contributors:description' => 'Περιγραφή',
	'admin:plugins:label:dependencies' => 'Εξαρτήσεις', /* #2 [Dependencies] */

	'admin:plugins:warning:elgg_version_unknown' => 'Αυτό το πρόσθετο χρησιμοποιεί ένα αρχείο δήλωσης(manifest) τύπου legacy και δεν καθορίζει κάποια συμβατή έκδοση του Elgg. Πιθανόν να μη δουλέψει!', /* [legacy](μετάφραση?) */
	'admin:plugins:warning:unmet_dependencies' => 'Αυτό το πρόσθετο έχει ανικανοποίητες εξαρτήσεις και δεν μπορεί να ενεργοποιηθεί. Ελέγξτε τις εξαρτήσεις στο πλαίσιο των περισσότερων πληροφοριών.', /* #2 [Check dependencies under more info.] */
	'admin:plugins:warning:invalid' => 'Αυτό το πρόσθετο είναι μη έγκυρο: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Ελέγξτε <a href="http://docs.elgg.org/Invalid_Plugin"> το εγχειρίδιο του Elgg </a> για συμβουλές επίλυσης.',/* #2 [documentation] */
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

	'admin:statistics:description' => "Αυτή είναι μια επισκόπηση των στατιστικών στοιχείων στη σελίδα σας. Αν χρειάζεστε πιο λεπτομερή στοιχεία, ένα επαγγελματικό feature διαχείρισης είναι διαθέσιμο.", /* #1 [feature]] */
	'admin:statistics:opt:description' => "Προβολή στατιστικών πληροφοριών για τους χρήστες και τα αντικείμενα στη σελίδα σας.",
	'admin:statistics:opt:linktext' => "Προβολή στατιστικών στοιχείων...",
	'admin:statistics:label:basic' => "Βασικά στατιστικά στοιχεία της σελίδας",
	'admin:statistics:label:numentities' => "Πρόσωπα στη σελίδα",/* #2 [Entities on site]=(οντότητες,υπάρξεις)(ίσως πρόσωπα) */
	'admin:statistics:label:numusers' => "Πλήθος χρηστών",
	'admin:statistics:label:numonline' => "Πλήθος συνδεδεμένων χρηστών",
	'admin:statistics:label:onlineusers' => "Τρέχοντα συνδεδεμένοι χρήστες",/* #2 (Τρέχοντα? Στέκει;)*/
	'admin:statistics:label:admins'=>"Διαχειριστές",
	'admin:statistics:label:version' => "Έκδοση Elgg",
	'admin:statistics:label:version:release' => "Κυκλοφορία",/* #2 [Release] */
	'admin:statistics:label:version:version' => "Έκδοση",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Εξυπηρετητής ιστού',/* #2 [Web Server](διακομιστής) */
	'admin:server:label:server' => 'Εξυπηρετητής',
	'admin:server:label:log_location' => 'Τοποθεσία αρχείου καταγραφής(log)',/*[Log Location]*/
	'admin:server:label:php_version' => 'Έκδοση PHP',
	'admin:server:label:php_ini' => 'Τοποθεσία αρχείου αρχικοποίησης της PHP', /* #2 [PHP ini file location] */
	'admin:server:label:php_log' => 'Αρχείο καταγραφής PHP',
	'admin:server:label:mem_avail' => 'Διαθέσιμη μνήμη',
	'admin:server:label:mem_used' => 'Δεσμευμένη μνήμη',
	'admin:server:error_log' => "Αρχείο καταγραφής σφαλμάτων του εξυπηρετητή ιστού", /* #22 [web server] */
	'admin:server:label:post_max_size' => 'Μέγιστο μέγεθος POST',
	'admin:server:label:upload_max_filesize' => 'Μέγιστο μέγεθος αρχείου για ανέβασμα', /* #2 ['Upload maximum size'] */
	'admin:server:warning:post_max_too_small' => '(Σημείωση: Το post_max_size πρέπει να είναι μεγαλύτερο από αυτή την τιμή για να υποστηριχθεί \'ανέβασμα\' αρχείου τέτοιου μεγέθους)', /* #8888 */

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
	'admin:user:removeadmin:no' => "Αδυναμία άρχης των δικαιωμάτων διαχειριστή από αυτό τον χρήστη.",
	'admin:user:self:removeadmin:no' => "Δεν μπορείτε να αφαιρέσετε τα δικαιώματα διαχειριστή που έχετε.",

	'admin:appearance:menu_items' => 'Στοιχεία μενού', /* #2 [Menu Items] */
	'admin:menu_items:configure' => 'Διαμόρφωση στοιχείων κυρίως μενού',
	'admin:menu_items:description' => 'Επιλέξτε ποια στοιχεία μενού θέλετε να φαίνονται ως featured σύνδεσμοι.  Τα μη χρησιμοποιημένα στοιχεία θα προστεθούν ως "Περισσότερα" στο τέλος της λίστας.', /* #1 [featured] */
	'admin:menu_items:hide_toolbar_entries' => 'Αφαίρεση συνδέσμων από το μενού της γραμμής εργαλείων;',
	'admin:menu_items:saved' => 'Τα στοιχεία μενού αποθηκεύτηκαν.',
	'admin:add_menu_item' => 'Προσθήκη προσαρμοσμένου στοιχείου μενού', /* #2 [custom] (νέου) */
	'admin:add_menu_item:description' => 'Συμπληρώστε το εμφανιζόμενο όνομα και τον υπερσύνδεσμο για να προσθέσετε προσαρμοσμένα στοιχεία στο μενού πλοήγησης.',/* #22 [custom] */

	'admin:appearance:default_widgets' => 'Προεπιλεγμένα Widgets', /* #12 [widget] */
	'admin:default_widgets:unknown_type' => 'Άγνωστος τύπος  widget', /* #12 [widget] */
	'admin:default_widgets:instructions' => 'Προσθέστε, αφαιρέστε, τοποθετήστε και διαμορφώστε τα προεπιλεγμένα widgets για την επιλεγμένη σελίδα των widget.
Αυτές οι αλλαγές θα επηρεάσουν μόνο τους νέους χρήστες στη σελίδα.', /* #2 ['Add, remove, position, and configure default widgets for the selected widget page.] */

	'admin:robots.txt:instructions' => "Επεξεργαστείτε παρακάτω το αρχείο robots.txt της σελίδας",
	'admin:robots.txt:plugins' => "Τα πρόσθετα προσθέτους τα εξής στο αρχείο robots.txt",
	'admin:robots.txt:subdir' => "Το εργαλείο του αρχείου robots.txt δεν θα δουλέψει επειδή το Elgg είναι εγκατεστημένο σε ένα υπο-φάκελο",

	'admin:maintenance_mode:default_message' => 'Η σελίδα βρίσκεται υπό συντήρηση',
	'admin:maintenance_mode:instructions' => 'Η λειτουργία συντήρησης θα πρέπει να χρησιμοποιείται για τις αναβαθμίσεις και άλλες μεγάλες αλλαγές στη σελίδα.
		Όταν είναι ενεργοποιημένη, μόνο οι διαχειριστές μπορούν να συνδεθούν και να περιηγηθούν στη σελίδα.',
	'admin:maintenance_mode:mode_label' => 'Λειτουργία συντήρησης',
	'admin:maintenance_mode:message_label' => 'Το μήνυμα που προβάλλεται στους χρήτες όταν η λειτουργία συντήρησης είναι ενεργή',
	'admin:maintenance_mode:saved' => 'Οι ρυθμίσεις της λειτουργίας συντήρησης αποθηκεύτηκαν.',
	'admin:maintenance_mode:indicator_menu_item' => 'Η σελίδα βρίσκεται σε λειτουργία συντήρησης.',
	'admin:login' => 'Σύνδεση διαχειριστή',

//###################################################################################
//#                              END OF PART 4                                      #
//###################################################################################

/**
 * User settings
 */
		
	'usersettings:description' => "Ο πίνακας ρυθμίσεων χρήστη σας επιτρέπει να ελέγχετε όλες τις προσωπικές σας ρυθμίσεις, από τη διαχείριση χρήστη, μέχρι το πως συμπεριφέρονται τα πρόσθετα. Διαλέξτε παρακάτω μια επιλογή για να ξεκινήσετε.",/* [The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.] */

	'usersettings:statistics' => "Τα στατιστικά στοιχεία σας",
	'usersettings:statistics:opt:description' => "Προβολή στατιστικών πληροφοριών σχετικά με χρήστες και περιεχόμενα στη σελίδα σας.", /* [objects](αντικείμενα) */
	'usersettings:statistics:opt:linktext' => "Στατιστικά στοιχεία λογαριασμού",

	'usersettings:user' => "Οι ρυθμίσεις του/της %s",
	'usersettings:user:opt:description' => "Σας επιτρέπει να ελέγξετε τις ρυθμίσεις χρήστη.",
	'usersettings:user:opt:linktext' => "Αλλάξτε τις ρυθμίσεις σας",

	'usersettings:plugins' => "Εργαλεία",
	'usersettings:plugins:opt:description' => "Διαμόρφωση ρυθμίσεων (αν υπάρχουν) για τα ενεργά εργαλεία.",/* #2 [Configure] */
	'usersettings:plugins:opt:linktext' => "Διαμορφώστε τα εργαλεία σας",

	'usersettings:plugins:description' => "Αυτός ο πίνακας ελέγχου σας επιτρέπει να ελέγχετε και να διαμορφώνεται τις προσωπικές σας ρυθμίσεις για εργαλεία που εγκαταστάθηκαν από τον διαχειριστή συστήματος.",/* #2 [panel] */
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
	'river:select' => 'Προβολή %s', /* #8888 */
	'river:comments:more' => '+%u περισσότερα',
	'river:generic_comment' => 'σχολίασε σε %s %s',

	'friends:widget:description' => "Προβάλλει κάποιους από τους φίλους σας.",
	'friends:num_display' => "Πλήθος φίλων για προβολή",
	'friends:icon_size' => "Μέγεθος εικονιδίου", /* #2 [Icon size](Εικόνες)(Προτάθηκε "εικονίδιο" καθώς παρακάτω γίνεται αναφορά σε icons του topbar) */
	'friends:tiny' => "μικροσκοπικό", /* #2 [για icon] */
	'friends:small' => "μικρό", /* #2 [για icon] */

/**
 * Icons
 */

	'icon:size' => "Μέγεθος εικονιδίου", /* [icon] */
	'icon:size:topbar' => "Πάνω γραμμή εργαλείων", /* #2 [topbar] */
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
	'saving' => "Αποθήκευση ...",
	'update' => "Ανανέωση",/* #2 [update] */
	'preview' => "Προεπισκόπηση",
	'edit' => "Επεξεργασία",
	'delete' => "Διαγραφή",
	'accept' => "Αποδοχή",
	'reject' => "Απόρριψη",
	'decline' => "Άρνηση",
	'approve' => "Έγκριση",
	'activate' => "Ενεργοποίηση",
	'deactivate' => "Απενεργοποίηση",
	'disapprove' => "Μη αποδοχή", /* [Disapprove] */
	'revoke' => "Ανάκληση",
	'load' => "Φόρτωση",
	'upload' => "Ανέβασμα",
	'download' => "Κατέβασμα",
	'ban' => "Αποκλεισμός",
	'unban' => "Άρση αποκλεισμού",
	'banned' => "Αποκλεισμένος",
	'enable' => "Ενεργοποίηση",
	'disable' => "Απενεργοποίηση",
	'request' => "Αίτηση",/* #2 [Request] */
	'complete' => "Ολοκλήρωση", /* #2 */
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
	'new' => 'Νέο', /* #8888 */
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
	'makeadmin' => "Προσθήκη διαχειριστή", /* [make](δημιουργία) */
	'removeadmin' => "Αφαίρεση διαχειριστή",

	'option:yes' => "Ναι",
	'option:no' => "Όχι",

	'unknown' => 'Άγνωστο', /* #8888 */
	'never' => 'Ποτέ',

	'active' => 'Ενεργό', /* #8888 */ 
	'total' => 'Συνολικά',
	
	'ok' => 'OK',
	'any' => 'Κανένα', /* #8888 [any](οποιοδήποτε) */
	'error' => 'Σφάλμα',
	
	'other' => 'Άλλο', /* #8888 [other](άλλα) */
	'options' => 'Επιλογές',
	'advanced' => 'Για προχωρημένους',

	'learnmore' => "Κάντε κλικ για να μάθετε περισσότερα.",
	'unknown_error' => 'Άγνωστο σφάλμα',

	'content' => "περιεχόμενο",
	'content:latest' => 'Πρόσφατη δραστηριότητα',
	'content:latest:blurb' => 'Εναλλακτικά κάντε κλικ εδώ για να δείτε την πρόσφατη δραστηριότητα σε όλη τη σελίδα.',

	'link:text' => 'προβολή συνδέσμου',
	
/**
 * Generic questions
 */

	'question:areyousure' => 'Είστε σίγουρος/η;',

/**
 * Status
 */

	'status' => 'Κατάσταση', /*[Status] */
	'status:unsaved_draft' => 'Μη αποθηκευμένο προσχέδιο',
	'status:draft' => 'Προσχέδιο',
	'status:unpublished' => 'Αδημοσίευτη',
	'status:published' => 'Δημοσιευμένη',
	'status:featured' => 'Featured', /* #12 [featured] */
	'status:open' => 'Ανοιχτή',
	'status:closed' => 'Κλειστή', /* (γένος τελευταίου "blocl") */

/**
 * Generic sorts
 */

	'sort:newest' => 'Πρόσφατα', /* #8888 whole block */
	'sort:popular' => 'Δημοφιλή',
	'sort:alpha' => 'Αλφαβητικά',
	'sort:priority' => 'Προτεραιότητα',
		
/**
 * Generic data words
 */

	'title' => "Τίτλος",
	'description' => "Περιγραφή",
	'tags' => "Ετικέτες",
	'spotlight' => "Επίκεντρο",/* #2 [Spotlight](προσκήνιο ή επίκεντρο) */
	'all' => "Όλα", /* #8888 */
	'mine' => "Τα δικά μου",/* #8888 */

	'by' => 'από',
	'none' => 'κανένα', /* #8888 */

	'annotations' => "Σχολιασμοί",/*[Annotations](Σημειώσεις)*/
	'relationships' => "Σχέσεις",
	'metadata' => "Μεταδεδομένα", /* [Metadata] */
	'tagcloud' => "Σύννεφο ετικετών",/* #2 [tag cloud] */
	'tagcloud:allsitetags' => "Οι ετικέτες όλης της σελίδας",

	'on' => 'Ανοιχτό', /* #8888 */
	'off' => 'Κλειστό',/* #8888 */

/**
 * Entity actions
 */
		
	'edit:this' => 'Επεξεργασία', /* [Edit this] */ /* [Entity] (προηγουμένος αναφέρθηκε σε πρόσωπο)(πρόσωπα στη σελίδα) */
	'delete:this' => 'Διαγραφή', /*[Delete this] */
	'comment:this' => 'Σχολιασμός',/*[Comment on this]*/

/**
 * Input / output strings
 */

	'deleteconfirm' => "Είστε σίγουρος/η ότι θέλετε να διαγράψετε αυτό το αντικείμενο;", /* #2 [item](στοιχείο) */
	'deleteconfirm:plural' => "Είστε σίγουρος/η ότι θέλετε να διαγράψετε αυτά τα αντικείμενα;",/* #2 same as above] */
	'fileexists' => "Ένα αρχείο έχει ήδη ανεβεί. Για να το αντικαταστήσετε επιλέξτετο παρακάτω:",

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
	'importfail' => "Ανεπιτυχής εισαγωγή δεδομένων τύπου OpenDD.",/* #1 [OpenDD import of data failed.] */

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
	'friendlytime:date_format' => 'j F Y @ g:ia', /* #1 #8888 [j F Y @ g:ia] */
	
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

	'installation:sitename' => "The name of your site:",
	'installation:sitedescription' => "Short description of your site (optional):",
	'installation:wwwroot' => "The site URL:",
	'installation:path' => "The full path of the Elgg installation:",
	'installation:dataroot' => "The full path of the data directory:",
	'installation:dataroot:warning' => "You must create this directory manually. It should be in a different directory to your Elgg installation.",
	'installation:sitepermissions' => "The default access permissions:",
	'installation:language' => "The default language for your site:",
	'installation:debug' => "Control the amount of information written to the server's log.",
	'installation:debug:label' => "Log level:",
	'installation:debug:none' => 'Turn off logging (recommended)',
	'installation:debug:error' => 'Log only critical errors',
	'installation:debug:warning' => 'Log errors and warnings',
	'installation:debug:notice' => 'Log all errors, warnings and notices',
	'installation:debug:info' => 'Log everything',

	// Walled Garden support
	'installation:registration:description' => 'User registration is enabled by default. Turn this off if you do not want people to register on their own.',
	'installation:registration:label' => 'Allow new users to register',
	'installation:walled_garden:description' => 'Enable this to prevent non-members from viewing the site except for web pages marked as public (such as login and registration).',
	'installation:walled_garden:label' => 'Restrict pages to logged-in users',

	'installation:httpslogin' => "Enable this to have user logins performed over HTTPS. This requires an HTTPS enabled web server!",
	'installation:httpslogin:label' => "Enable HTTPS logins",
	'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",

	'installation:siteemail' => "Site email address (used when sending system emails):",

	'admin:site:access:warning' => "This is the privacy setting suggested to users when they create new content. Changing it does not change access to content.",
	'installation:allow_user_default_access:description' => "Enable this to allow users to set their own suggested privacy setting that overrides the system suggestion.",
	'installation:allow_user_default_access:label' => "Allow user default access",

	'installation:simplecache:description' => "The simple cache increases performance by caching static content including some CSS and JavaScript files.",
	'installation:simplecache:label' => "Use simple cache (recommended)",

	'installation:minify:description' => "The simple cache can also improve performance by compressing JavaScript and CSS files. (Requires that simple cache is enabled.)",
	'installation:minify_js:label' => "Compress JavaScript (recommended)",
	'installation:minify_css:label' => "Compress CSS (recommended)",

	'installation:htaccess:needs_upgrade' => "You must update your .htaccess file so that the path is injected into the GET parameter __elgg_uri (you can use htaccess_dist as a guide).",
	'installation:htaccess:localhost:connectionfailed' => "Elgg cannot connect to itself to test rewrite rules properly. Check that curl is working and there are no IP restrictions preventing localhost connections.",
	
	'installation:systemcache:description' => "The system cache decreases the loading time of Elgg by caching data to files.",
	'installation:systemcache:label' => "Use system cache (recommended)",

	'admin:legend:caching' => 'Caching',
	'admin:legend:content_access' => 'Content Access',
	'admin:legend:site_access' => 'Site Access',
	'admin:legend:debug' => 'Debugging and Logging',

	'upgrading' => 'Upgrading...',
	'upgrade:db' => 'Your database was upgraded.',
	'upgrade:core' => 'Your Elgg installation was upgraded.',
	'upgrade:unlock' => 'Unlock upgrade',
	'upgrade:unlock:confirm' => "The database is locked for another upgrade. Running concurrent upgrades is dangerous. You should only continue if you know there is not another upgrade running. Unlock?",
	'upgrade:locked' => "Cannot upgrade. Another upgrade is running. To clear the upgrade lock, visit the Admin section.",
	'upgrade:unlock:success' => "Upgrade unlocked successfully.",
	'upgrade:unable_to_upgrade' => 'Unable to upgrade.',
	'upgrade:unable_to_upgrade_info' =>
		'This installation cannot be upgraded because legacy views
		were detected in the Elgg core views directory. These views have been deprecated and need to be
		removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
		simply delete the views directory and replace it with the one from the latest
		package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

		If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Upgrading Elgg documentation</a>.  If you require assistance, please post to the
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',

	'update:twitter_api:deactivated' => 'Twitter API (previously Twitter Service) was deactivated during the upgrade. Please activate it manually if required.',
	'update:oauth_api:deactivated' => 'OAuth API (previously OAuth Lib) was deactivated during the upgrade.  Please activate it manually if required.',
	'upgrade:site_secret_warning:moderate' => "You are encouraged to regenerate your site key to improve system security. See Configure &gt; Settings &gt; Advanced",
	'upgrade:site_secret_warning:weak' => "You are strongly encouraged to regenerate your site key to improve system security. See Configure &gt; Settings &gt; Advanced",

	'ElggUpgrade:error:url_invalid' => 'Invalid value for URL.',
	'ElggUpgrade:error:url_not_unique' => 'Upgrade URLs must be unique.',
	'ElggUpgrade:error:title_required' => 'ElggUpgrade objects must have a title.',
	'ElggUpgrade:error:description_required' => 'ElggUpgrade objects must have a description.',
	'ElggUpgrade:error:upgrade_url_required' => 'ElggUpgrade objects must have an upgrade URL.',

	'deprecated:function' => '%s() was deprecated by %s()',

	'admin:pending_upgrades' => 'The site has pending upgrades that require your immediate attention.',
	'admin:view_upgrades' => 'View pending upgrades.',
 	'admin:upgrades' => 'Upgrades',
	'item:object:elgg_upgrade' => 'Site upgrades',
	'admin:upgrades:none' => 'Your installation is up to date!',

	'upgrade:item_count' => 'There are <b>%s</b> items that need to be upgraded.',
	'upgrade:warning' => '<b>Warning:</b> on a large site this upgrade may take a significantly long time!',
	'upgrade:success_count' => 'Upgraded:',
	'upgrade:error_count' => 'Errors:',
	'upgrade:river_update_failed' => 'Failed to update the river entry for item id %s',
	'upgrade:timestamp_update_failed' => 'Failed to update the timestamps for item id %s',
	'upgrade:finished' => 'Upgrade finished',
	'upgrade:finished_with_errors' => '<p>Upgrade finished with errors. Refresh the page and try running the upgrade again.</p></p><br />If the error recurs, check the server error log for possible cause. You can seek help for fixing the error from the <a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">Technical support group</a> in the Elgg community.</p>',

	// Strings specific for the comments upgrade
	'admin:upgrades:comments' => 'Comments upgrade',
	'upgrade:comment:create_failed' => 'Failed to convert comment id %s to an entity.',

	// Strings specific for the datadir upgrade
	'admin:upgrades:datadirs' => 'Data directory upgrade',

	// Strings specific for the discussion reply upgrade
	'admin:upgrades:discussion_replies' => 'Discussion reply upgrade',
	'discussion:upgrade:replies:create_failed' => 'Failed to convert discussion reply id %s to an entity.',


//###################################################################################
//#                              END OF PART 6                                      #
//###################################################################################


/**
 * Welcome
 */

	'welcome' => "Welcome",
	'welcome:user' => 'Welcome %s',

/**
 * Emails
 */
		
	'email:from' => 'From',
	'email:to' => 'To',
	'email:subject' => 'Subject',
	'email:body' => 'Body',
	
	'email:settings' => "Email settings",
	'email:address:label' => "Email address",

	'email:save:success' => "New email address saved. Verification is requested.",
	'email:save:fail' => "New email address could not be saved.",

	'friend:newfriend:subject' => "%s has made you a friend!",
	'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

%s

Please do not reply to this email.",

	'email:changepassword:subject' => "Password changed!",
	'email:changepassword:body' => "Hi %s,

Your password has been changed.",

	'email:resetpassword:subject' => "Password reset!",
	'email:resetpassword:body' => "Hi %s,

Your password has been reset to: %s",

	'email:changereq:subject' => "Request for change password.",
	'email:changereq:body' => "Hi %s,

Somebody (from the IP address %s) has requested change password for their account.

If you requested this, click on the link below. Otherwise ignore this email.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Your default access level",
	'default_access:label' => "Default access",
	'user:default_access:success' => "Your new default access level was saved.",
	'user:default_access:failure' => "Your new default access level could not be saved.",

/**
 * Comments
 */

	'comments:count' => "%s comments",
	'item:object:comment' => 'Comments',

	'river:comment:object:default' => '%s commented on %s',

	'generic_comments:add' => "Leave a comment",
	'generic_comments:edit' => "Edit comment",
	'generic_comments:post' => "Post comment",
	'generic_comments:text' => "Comment",
	'generic_comments:latest' => "Latest comments",
	'generic_comment:posted' => "Your comment was successfully posted.",
	'generic_comment:updated' => "The comment was successfully updated.",
	'generic_comment:deleted' => "The comment was successfully deleted.",
	'generic_comment:blank' => "Sorry, you need to actually put something in your comment before we can save it.",
	'generic_comment:notfound' => "Sorry, we could not find the specified item.",
	'generic_comment:notdeleted' => "Sorry, we could not delete this comment.",
	'generic_comment:failure' => "An unexpected error occurred when saving the comment.",
	'generic_comment:none' => 'No comments',
	'generic_comment:title' => 'Comment by %s',
	'generic_comment:on' => '%s on %s',
	'generic_comments:latest:posted' => 'posted a',

	'generic_comment:email:subject' => 'You have a new comment!',
	'generic_comment:email:body' => "You have a new comment on your item \"%s\" from %s. It reads:


%s


To reply or view the original item, click here:

%s

To view %s's profile, click here:

%s

Please do not reply to this email.",

/**
 * Entities
 */
	
	'byline' => 'By %s',
	'entity:default:strapline' => 'Created %s by %s',
	'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',

	'entity:delete:success' => 'Entity %s has been deleted',
	'entity:delete:fail' => 'Entity %s could not be deleted',

/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
	'actiongatekeeper:tokeninvalid' => "The page you were using had expired. Please try again.",
	'actiongatekeeper:timeerror' => 'The page you were using has expired. Please refresh and try again.',
	'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',
	'actiongatekeeper:uploadexceeded' => 'The size of file(s) uploaded exceeded the limit set by your site administrator',
	'actiongatekeeper:crosssitelogin' => "Sorry, logging in from a different domain is not permitted. Please try again.",

/**
 * Word blacklists
 */

	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Tags',
	'tags:site_cloud' => 'Site Tag Cloud',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Failed to contact %s. You may experience problems saving content. Please refresh this page.',
	'js:security:token_refreshed' => 'Connection to %s restored!',
	'js:lightbox:current' => "image %s of %s",

/**
 * Miscellaneous
 */
	'elgg:powered' => "Powered by Elgg",


//###################################################################################
//#                              END OF PART 7                                      #
//###################################################################################



/**
 * Languages according to ISO 639-1
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
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
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
