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

	'plugins:disabled' => 'Plugins are not being loaded because a file named "disabled" is in the mod directory.',
	'plugins:settings:save:ok' => "Settings for the %s plugin were saved successfully.",
	'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
	'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
	'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
	'item:object:plugin' => 'Plugins',

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Activate All',
	'admin:plugins:deactivate_all' => 'Deactivate All',
	'admin:plugins:activate' => 'Activate',
	'admin:plugins:deactivate' => 'Deactivate',
	'admin:plugins:description' => "This admin panel allows you to control and configure tools installed on your site.",
	'admin:plugins:opt:linktext' => "Configure tools...",
	'admin:plugins:opt:description' => "Configure the tools installed on the site. ",
	'admin:plugins:label:author' => "Author",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Categories',
	'admin:plugins:label:licence' => "License",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:repository' => "Code",
	'admin:plugins:label:bugtracker' => "Report issue",
	'admin:plugins:label:donate' => "Donate",
	'admin:plugins:label:moreinfo' => 'more info',
	'admin:plugins:label:version' => 'Version',
	'admin:plugins:label:location' => 'Location',
	'admin:plugins:label:contributors' => 'Contributors',
	'admin:plugins:label:contributors:name' => 'Name',
	'admin:plugins:label:contributors:email' => 'E-mail',
	'admin:plugins:label:contributors:website' => 'Website',
	'admin:plugins:label:contributors:username' => 'Community username',
	'admin:plugins:label:contributors:description' => 'Description',
	'admin:plugins:label:dependencies' => 'Dependencies',

	'admin:plugins:warning:elgg_version_unknown' => 'This plugin uses a legacy manifest file and does not specify a compatible Elgg version. It probably will not work!',
	'admin:plugins:warning:unmet_dependencies' => 'This plugin has unmet dependencies and cannot be activated. Check dependencies under more info.',
	'admin:plugins:warning:invalid' => 'This plugin is invalid: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Check <a href="http://docs.elgg.org/Invalid_Plugin">the Elgg documentation</a> for troubleshooting tips.',
	'admin:plugins:cannot_activate' => 'cannot activate',

	'admin:plugins:set_priority:yes' => "Reordered %s.",
	'admin:plugins:set_priority:no' => "Could not reorder %s.",
	'admin:plugins:set_priority:no_with_msg' => "Could not reorder %s. Error: %s",
	'admin:plugins:deactivate:yes' => "Deactivated %s.",
	'admin:plugins:deactivate:no' => "Could not deactivate %s.",
	'admin:plugins:deactivate:no_with_msg' => "Could not deactivate %s. Error: %s",
	'admin:plugins:activate:yes' => "Activated %s.",
	'admin:plugins:activate:no' => "Could not activate %s.",
	'admin:plugins:activate:no_with_msg' => "Could not activate %s. Error: %s",
	'admin:plugins:categories:all' => 'All categories',
	'admin:plugins:plugin_website' => 'Plugin website',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Version %s',
	'admin:plugin_settings' => 'Plugin Settings',
	'admin:plugins:warning:unmet_dependencies_active' => 'This plugin is active but has unmet dependencies. You may encounter problems. See "more info" below for details.',

	'admin:plugins:dependencies:type' => 'Type',
	'admin:plugins:dependencies:name' => 'Name',
	'admin:plugins:dependencies:expected_value' => 'Expected Value',
	'admin:plugins:dependencies:local_value' => 'Actual value',
	'admin:plugins:dependencies:comment' => 'Comment',

	'admin:statistics:description' => "This is an overview of statistics on your site. If you need more detailed statistics, a professional administration feature is available.",
	'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
	'admin:statistics:opt:linktext' => "View statistics...",
	'admin:statistics:label:basic' => "Basic site statistics",
	'admin:statistics:label:numentities' => "Entities on site",
	'admin:statistics:label:numusers' => "Number of users",
	'admin:statistics:label:numonline' => "Number of users online",
	'admin:statistics:label:onlineusers' => "Users online now",
	'admin:statistics:label:admins'=>"Admins",
	'admin:statistics:label:version' => "Elgg version",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Version",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Web Server',
	'admin:server:label:server' => 'Server',
	'admin:server:label:log_location' => 'Log Location',
	'admin:server:label:php_version' => 'PHP version',
	'admin:server:label:php_ini' => 'PHP ini file location',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => 'Memory available',
	'admin:server:label:mem_used' => 'Memory used',
	'admin:server:error_log' => "Web server's error log",
	'admin:server:label:post_max_size' => 'POST maximum size',
	'admin:server:label:upload_max_filesize' => 'Upload maximum size',
	'admin:server:warning:post_max_too_small' => '(Note: post_max_size must be larger than this value to support uploads of this size)',

	'admin:user:label:search' => "Find users:",
	'admin:user:label:searchbutton' => "Search",

	'admin:user:ban:no' => "Can not ban user",
	'admin:user:ban:yes' => "User banned.",
	'admin:user:self:ban:no' => "You cannot ban yourself",
	'admin:user:unban:no' => "Can not unban user",
	'admin:user:unban:yes' => "User unbanned.",
	'admin:user:delete:no' => "Can not delete user",
	'admin:user:delete:yes' => "The user %s has been deleted",
	'admin:user:self:delete:no' => "You cannot delete yourself",

	'admin:user:resetpassword:yes' => "Password reset, user notified.",
	'admin:user:resetpassword:no' => "Password could not be reset.",

	'admin:user:makeadmin:yes' => "User is now an admin.",
	'admin:user:makeadmin:no' => "We could not make this user an admin.",

	'admin:user:removeadmin:yes' => "User is no longer an admin.",
	'admin:user:removeadmin:no' => "We could not remove administrator privileges from this user.",
	'admin:user:self:removeadmin:no' => "You cannot remove your own administrator privileges.",

	'admin:appearance:menu_items' => 'Menu Items',
	'admin:menu_items:configure' => 'Configure main menu items',
	'admin:menu_items:description' => 'Select which menu items you want to show as featured links.  Unused items will be added as "More" at the end of the list.',
	'admin:menu_items:hide_toolbar_entries' => 'Remove links from tool bar menu?',
	'admin:menu_items:saved' => 'Menu items saved.',
	'admin:add_menu_item' => 'Add a custom menu item',
	'admin:add_menu_item:description' => 'Fill out the Display name and URL to add custom items to your navigation menu.',

	'admin:appearance:default_widgets' => 'Default Widgets',
	'admin:default_widgets:unknown_type' => 'Unknown widget type',
	'admin:default_widgets:instructions' => 'Add, remove, position, and configure default widgets for the selected widget page.
These changes will only affect new users on the site.',

	'admin:robots.txt:instructions' => "Edit this site's robots.txt file below",
	'admin:robots.txt:plugins' => "Plugins are adding the following to the robots.txt file",
	'admin:robots.txt:subdir' => "The robots.txt tool will not work because Elgg is installed in a sub-directory",

	'admin:maintenance_mode:default_message' => 'This site is down for maintenance',
	'admin:maintenance_mode:instructions' => 'Maintenance mode should be used for upgrades and other large changes to the site.
		When it is on, only admins can log in and browse the site.',
	'admin:maintenance_mode:mode_label' => 'Maintenance mode',
	'admin:maintenance_mode:message_label' => 'Message displayed to users when maintenance mode is on',
	'admin:maintenance_mode:saved' => 'The maintenance mode settings were saved.',
	'admin:maintenance_mode:indicator_menu_item' => 'The site is in maintenance mode.',
	'admin:login' => 'Admin Login',

/**
 * User settings
 */
		
	'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",

	'usersettings:statistics' => "Your statistics",
	'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
	'usersettings:statistics:opt:linktext' => "Account statistics",

	'usersettings:user' => "%s's settings",
	'usersettings:user:opt:description' => "This allows you to control user settings.",
	'usersettings:user:opt:linktext' => "Change your settings",

	'usersettings:plugins' => "Tools",
	'usersettings:plugins:opt:description' => "Configure settings (if any) for your active tools.",
	'usersettings:plugins:opt:linktext' => "Configure your tools",

	'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
	'usersettings:statistics:label:numentities' => "Your content",

	'usersettings:statistics:yourdetails' => "Your details",
	'usersettings:statistics:label:name' => "Full name",
	'usersettings:statistics:label:email' => "Email",
	'usersettings:statistics:label:membersince' => "Member since",
	'usersettings:statistics:label:lastlogin' => "Last logged in",

/**
 * Activity river
 */
		
	'river:all' => 'All Site Activity',
	'river:mine' => 'My Activity',
	'river:owner' => 'Activity of %s',
	'river:friends' => 'Friends Activity',
	'river:select' => 'Show %s',
	'river:comments:more' => '+%u more',
	'river:generic_comment' => 'commented on %s %s',

	'friends:widget:description' => "Displays some of your friends.",
	'friends:num_display' => "Number of friends to display",
	'friends:icon_size' => "Icon size",
	'friends:tiny' => "tiny",
	'friends:small' => "small",

/**
 * Icons
 */

	'icon:size' => "Icon size",
	'icon:size:topbar' => "Topbar",
	'icon:size:tiny' => "Tiny",
	'icon:size:small' => "Small",
	'icon:size:medium' => "Medium",
	'icon:size:large' => "Large",
	'icon:size:master' => "Extra Large",
		
/**
 * Generic action words
 */

	'save' => "Save",
	'reset' => 'Reset',
	'publish' => "Publish",
	'cancel' => "Cancel",
	'saving' => "Saving ...",
	'update' => "Update",
	'preview' => "Preview",
	'edit' => "Edit",
	'delete' => "Delete",
	'accept' => "Accept",
	'reject' => "Reject",
	'decline' => "Decline",
	'approve' => "Approve",
	'activate' => "Activate",
	'deactivate' => "Deactivate",
	'disapprove' => "Disapprove",
	'revoke' => "Revoke",
	'load' => "Load",
	'upload' => "Upload",
	'download' => "Download",
	'ban' => "Ban",
	'unban' => "Unban",
	'banned' => "Banned",
	'enable' => "Enable",
	'disable' => "Disable",
	'request' => "Request",
	'complete' => "Complete",
	'open' => 'Open',
	'close' => 'Close',
	'hide' => 'Hide',
	'show' => 'Show',
	'reply' => "Reply",
	'more' => 'More',
	'more_info' => 'More info',
	'comments' => 'Comments',
	'import' => 'Import',
	'export' => 'Export',
	'untitled' => 'Untitled',
	'help' => 'Help',
	'send' => 'Send',
	'post' => 'Post',
	'submit' => 'Submit',
	'comment' => 'Comment',
	'upgrade' => 'Upgrade',
	'sort' => 'Sort',
	'filter' => 'Filter',
	'new' => 'New',
	'add' => 'Add',
	'create' => 'Create',
	'remove' => 'Remove',
	'revert' => 'Revert',

	'site' => 'Site',
	'activity' => 'Activity',
	'members' => 'Members',
	'menu' => 'Menu',

	'up' => 'Up',
	'down' => 'Down',
	'top' => 'Top',
	'bottom' => 'Bottom',
	'right' => 'Right',
	'left' => 'Left',
	'back' => 'Back',

	'invite' => "Invite",

	'resetpassword' => "Reset password",
	'changepassword' => "Change password",
	'makeadmin' => "Make admin",
	'removeadmin' => "Remove admin",

	'option:yes' => "Yes",
	'option:no' => "No",

	'unknown' => 'Unknown',
	'never' => 'Never',

	'active' => 'Active',
	'total' => 'Total',
	
	'ok' => 'OK',
	'any' => 'Any',
	'error' => 'Error',
	
	'other' => 'Other',
	'options' => 'Options',
	'advanced' => 'Advanced',

	'learnmore' => "Click here to learn more.",
	'unknown_error' => 'Unknown error',

	'content' => "content",
	'content:latest' => 'Latest activity',
	'content:latest:blurb' => 'Alternatively, click here to view the latest content from across the site.',

	'link:text' => 'view link',
	
/**
 * Generic questions
 */

	'question:areyousure' => 'Are you sure?',

/**
 * Status
 */

	'status' => 'Status',
	'status:unsaved_draft' => 'Unsaved Draft',
	'status:draft' => 'Draft',
	'status:unpublished' => 'Unpublished',
	'status:published' => 'Published',
	'status:featured' => 'Featured',
	'status:open' => 'Open',
	'status:closed' => 'Closed',

/**
 * Generic sorts
 */

	'sort:newest' => 'Newest',
	'sort:popular' => 'Popular',
	'sort:alpha' => 'Alphabetical',
	'sort:priority' => 'Priority',
		
/**
 * Generic data words
 */

	'title' => "Title",
	'description' => "Description",
	'tags' => "Tags",
	'spotlight' => "Spotlight",
	'all' => "All",
	'mine' => "Mine",

	'by' => 'by',
	'none' => 'none',

	'annotations' => "Annotations",
	'relationships' => "Relationships",
	'metadata' => "Metadata",
	'tagcloud' => "Tag cloud",
	'tagcloud:allsitetags' => "All site tags",

	'on' => 'On',
	'off' => 'Off',

/**
 * Entity actions
 */
		
	'edit:this' => 'Edit this',
	'delete:this' => 'Delete this',
	'comment:this' => 'Comment on this',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Are you sure you want to delete this item?",
	'deleteconfirm:plural' => "Are you sure you want to delete these items?",
	'fileexists' => "A file has already been uploaded. To replace it, select it below:",

/**
 * User add
 */

	'useradd:subject' => 'User account created',
	'useradd:body' => '
%s,

A user account has been created for you at %s. To log in, visit:

%s

And log in with these user credentials:

Username: %s
Password: %s

Once you have logged in, we highly recommend that you change your password.
',

/**
 * System messages
 */

	'systemmessages:dismiss' => "click to dismiss",


/**
 * Import / export
 */
		
	'importsuccess' => "Import of data was successful",
	'importfail' => "OpenDD import of data failed.",

/**
 * Time
 */

	'friendlytime:justnow' => "just now",
	'friendlytime:minutes' => "%s minutes ago",
	'friendlytime:minutes:singular' => "a minute ago",
	'friendlytime:hours' => "%s hours ago",
	'friendlytime:hours:singular' => "an hour ago",
	'friendlytime:days' => "%s days ago",
	'friendlytime:days:singular' => "yesterday",
	'friendlytime:date_format' => 'j F Y @ g:ia',
	
	'friendlytime:future:minutes' => "in %s minutes",
	'friendlytime:future:minutes:singular' => "in a minute",
	'friendlytime:future:hours' => "in %s hours",
	'friendlytime:future:hours:singular' => "in an hour",
	'friendlytime:future:days' => "in %s days",
	'friendlytime:future:days:singular' => "tomorrow",

	'date:month:01' => 'January %s',
	'date:month:02' => 'February %s',
	'date:month:03' => 'March %s',
	'date:month:04' => 'April %s',
	'date:month:05' => 'May %s',
	'date:month:06' => 'June %s',
	'date:month:07' => 'July %s',
	'date:month:08' => 'August %s',
	'date:month:09' => 'September %s',
	'date:month:10' => 'October %s',
	'date:month:11' => 'November %s',
	'date:month:12' => 'December %s',

	'date:weekday:0' => 'Sunday',
	'date:weekday:1' => 'Monday',
	'date:weekday:2' => 'Tuesday',
	'date:weekday:3' => 'Wednesday',
	'date:weekday:4' => 'Thursday',
	'date:weekday:5' => 'Friday',
	'date:weekday:6' => 'Saturday',
	
	'interval:minute' => 'Every minute',
	'interval:fiveminute' => 'Every five minutes',
	'interval:fifteenmin' => 'Every fifteen minutes',
	'interval:halfhour' => 'Every half hour',
	'interval:hourly' => 'Hourly',
	'interval:daily' => 'Daily',
	'interval:weekly' => 'Weekly',
	'interval:monthly' => 'Monthly',
	'interval:yearly' => 'Yearly',
	'interval:reboot' => 'On reboot',

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
);
