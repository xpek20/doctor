<?php

// --------------------------------------------------------
// This is only a pointer file, not an actual language file
// --------------------------------------------------------
//
// If you've copied this file to your /resources/lang/vendor/backpack/
// folder, please delete it, it's no use there. You need to copy/publish the
// actual language file, from the package.

// If a langfile with the same name exists in the package, load that one
// if (file_exists(__DIR__.'/../../../../../crud/src/resources/lang/'.basename(__DIR__).'/'.basename(__FILE__))) {
//     return include __DIR__.'/../../../../../crud/src/resources/lang/'.basename(__DIR__).'/'.basename(__FILE__);
// }
return [

// Forms
'save_action_save_and_new'         => 'Αποθήκευση',
'save_action_save_and_edit'        => 'Αποθήκευση και επεξεργασία',
'save_action_save_and_back'        => 'Αποθήκευση και επιστροφή',
'save_action_save_and_preview'     => 'Αποθήκευση και προεπισκόπιση',
'save_action_changed_notification' => 'Default behaviour after saving has been changed.',

// Create form
'add'                 => 'Προσθήκη',
'back_to_all'         => 'Επιστροφή ',
'cancel'              => 'Ακύρωση',
'add_a_new'           => 'Προσθήκη νέου ',

// Edit form
'edit'                 => 'Επεξεργασία',
'save'                 => 'Αποθήκευση',

// Translatable models
'edit_translations' => 'Translation',
'language'          => 'Language',

// CRUD table view
'all'                       => 'Όλα ',
'in_the_database'           => 'in the database',
'list'                      => 'Λίστα',
'reset'                     => 'Επαναφορά',
'actions'                   => 'Ενέργειες',
'preview'                   => 'Προβολή',
'delete'                    => 'Διαγραφή',
'admin'                     => 'Διαχειριστής',
'details_row'               => 'This is the details row. Modify as you please.',
'details_row_loading_error' => 'Υπήρξε ένα σφάλμα.',
'clone'                     => 'Clone',
'clone_success'             => '<strong>Entry cloned</strong><br>A new entry has been added, with the same information as this one.',
'clone_failure'             => '<strong>Cloning failed</strong><br>The new entry could not be created. Please try again.',

// Confirmation messages and bubbles
'delete_confirm'                              => 'Διαγραφή αντικειμένου;',
'delete_confirmation_title'                   => 'Το αντικείμενο διαγράφτηκε.',
'delete_confirmation_message'                 => 'Το αντικείμενο διαγράφηκε με επιτυχία.',
'delete_confirmation_not_title'               => 'Η διαγραφή απέτυχε.',
'delete_confirmation_not_message'             => "Υπήρξε κάποιο σφάλμα κατά την διαγραφή.",
'delete_confirmation_not_deleted_title'       => 'Ακύρωση διαγραφής.',
'delete_confirmation_not_deleted_message'     => 'Το αντικείμενο σου είναι ασφαλές.',

// Bulk actions
'bulk_no_entries_selected_title'   => 'No entries selected',
'bulk_no_entries_selected_message' => 'Please select one or more items to perform a bulk action on them.',

// Bulk delete
'bulk_delete_are_you_sure'   => 'Are you sure you want to delete these :number entries?',
'bulk_delete_sucess_title'   => 'Entries deleted',
'bulk_delete_sucess_message' => ' items have been deleted',
'bulk_delete_error_title'    => 'Delete failed',
'bulk_delete_error_message'  => 'One or more items could not be deleted',

// Bulk clone
'bulk_clone_are_you_sure'   => 'Are you sure you want to clone these :number entries?',
'bulk_clone_sucess_title'   => 'Entries cloned',
'bulk_clone_sucess_message' => ' items have been cloned.',
'bulk_clone_error_title'    => 'Cloning failed',
'bulk_clone_error_message'  => 'One or more entries could not be created. Please try again.',

// Ajax errors
'ajax_error_title' => 'Σφάλμα.',
'ajax_error_text'  => 'Σφάλμα κατά την φόρτωση της σελίδας. Παρακαλώ κάντε refresh.',

// DataTables translation
'emptyTable'     => 'No data available in table',
'info'           => 'Προβολή _START_ μέχρι _END_ από τα _TOTAL_ αντικείμενα',
'infoEmpty'      => 'Δεν βρέθηκαν αντικείμενα',
'infoFiltered'   => '(από τα _MAX_ συνολικά αντικείμενα)',
'infoPostFix'    => '.',
'thousands'      => ',',
'lengthMenu'     => '_MENU_ αντικείμενα ανά σελίδα',
'loadingRecords' => 'Loading...',
'processing'     => 'Processing...',
'search'         => 'Αναζήτηση',
'zeroRecords'    => 'Δεν βρέθηκε',
'paginate'       => [
    'first'    => 'First',
    'last'     => 'Last',
    'next'     => 'Next',
    'previous' => 'Previous',
],
'aria' => [
    'sortAscending'  => ': activate to sort column ascending',
    'sortDescending' => ': activate to sort column descending',
],
'export' => [
    'export'            => 'Εξαγωγή',
    'copy'              => 'Αντιγραφή',
    'excel'             => 'Excel',
    'csv'               => 'CSV',
    'pdf'               => 'PDF',
    'print'             => 'Print',
    'column_visibility' => 'Column visibility',
],

// global crud - errors
'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
'please_fix'          => 'Please fix the following errors:',

// global crud - success / error notification bubbles
'insert_success' => 'Το αντικείμενο προστέθηκε με επιτυχία.',
'update_success' => 'Το αντικείμενο επεξεργάστηκε με επιτυχία.',

// CRUD reorder view
'reorder'                      => 'Reorder',
'reorder_text'                 => 'Use drag&drop to reorder.',
'reorder_success_title'        => 'Done',
'reorder_success_message'      => 'Your order has been saved.',
'reorder_error_title'          => 'Error',
'reorder_error_message'        => 'Your order has not been saved.',

// CRUD yes/no
'yes' => 'Ναι',
'no'  => 'Όχι',

// CRUD filters navbar view
'filters'        => 'Filters',
'toggle_filters' => 'Toggle filters',
'remove_filters' => 'Remove filters',
'apply' => 'Apply',

//filters language strings
'today' => 'Today',
'yesterday' => 'Yesterday',
'last_7_days' => 'Last 7 Days',
'last_30_days' => 'Last 30 Days',
'this_month' => 'This Month',
'last_month' => 'Last Month',
'custom_range' => 'Custom Range',
'weekLabel' => 'W',

// Fields
'browse_uploads'            => 'Browse uploads',
'select_all'                => 'Select All',
'select_files'              => 'Select files',
'select_file'               => 'Select file',
'clear'                     => 'Clear',
'page_link'                 => 'Page link',
'page_link_placeholder'     => 'http://example.com/your-desired-page',
'internal_link'             => 'Internal link',
'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
'external_link'             => 'External link',
'choose_file'               => 'Choose file',
'new_item'                  => 'New Item',
'select_entry'              => 'Select an entry',
'select_entries'            => 'Select entries',

//Table field
'table_cant_add'    => 'Cannot add new :entity',
'table_max_reached' => 'Maximum number of :max reached',

// File manager
'file_manager' => 'File Manager',

// InlineCreateOperation
'related_entry_created_success' => 'Related entry has been created and selected.',
'related_entry_created_error' => 'Could not create related entry.',

// returned when no translations found in select inputs
'empty_translations' => '(empty)',
];


