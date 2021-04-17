(function($){
    // Initialisation du datatable sur Collectivites/index.ctp
    $('#dataTable-collectivites-index').dataTable({
        'order': [[ 0, "asc" ]],
        'language':{
                    "sProcessing":     "Traitement en cours...",
                    "sSearch":         "Recherche rapide&nbsp;: ",
                    "sLengthMenu":     "Afficher _MENU_ Lignes",
                    "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
                    "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    "sInfoPostFix":    "",
                    "sLoadingRecords": "Chargement en cours...",
                    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                    "oPaginate": {
                        "sFirst":      "Premier",
                        "sPrevious":   "Pr&eacute;c&eacute;dent",
                        "sNext":       "Suivant",
                        "sLast":       "Dernier"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                    }
                },
        "columns": [
            { "orderable": true },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
            { "orderable": false },
        ]
    });

    $('#dataTable-tcollectivites-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-oscs-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-toscs-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-domaines-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-tpartenaires-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-partenaires-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-tsessions-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-zinterventions-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-tinfrastructures-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-infrastructures-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-tentreprises-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-tdocuments-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-menus-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-smenus-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-regions-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-communes-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-pages-dashbordregion').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });

    $('#dataTable-utilisateurs-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
        { "orderable": false },
      ]
    });
    $('#dataTable-roles-index').dataTable({
      'order': [[ 0, "asc" ]],
      'language':{
        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Recherche rapide&nbsp;: ",
        "sLengthMenu":     "Afficher _MENU_ Lignes",
        "sInfo":           "Affichage de la ligne _START_ &agrave; _END_ sur _TOTAL_ lignes",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
          "sFirst":      "Premier",
          "sPrevious":   "Pr&eacute;c&eacute;dent",
          "sNext":       "Suivant",
          "sLast":       "Dernier"
        },
        "oAria": {
          "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
      },
      "columns": [
        { "orderable": true },
        { "orderable": true },
        { "orderable": false },
        { "orderable": false },
      ]
    });

})(jQuery);
