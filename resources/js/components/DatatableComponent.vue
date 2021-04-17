<template>
    <div>
        <bootstrap-4-datatable :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
        <bootstrap-4-datatable-pager v-model="page" type="abbreviated"></bootstrap-4-datatable-pager>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                columns: [{
                        label: 'id',
                        field: 'nom'
                    },
                    {
                        label: 'Prénom',
                        field: 'prenom'
                    },
                    {
                        label: 'Fonction',
                        field: 'function'
                    },
                    {
                        label: 'Département',
                        field: 'departement'
                    },
                    {
                        label: 'Service',
                        field: 'service'
                    },
                    {
                        label: 'Division',
                        field: 'division'
                    },
                    {
                        label: 'Téléphone',
                        field: 'telephone'
                    }
                ],
                rows: [],
                page: 1,
                filter:  '',
                perPage: 2,
            }
        },
        methods: {
            index: function () {
                axios.get('/users').then(function (res) {
                    this.rows = res.data;
                }.bind(this));
            }
        },
        created: function () {
            this.index()
        }
    }

</script>