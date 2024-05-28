<template>
    <card class="ff_managers_settings">
        <card-head>
            <h5 class="title">{{ $t('Categories') }}</h5>
        </card-head>
        <card-body>
            <categories-table>{{ $t('Categories') }}</categories-table>
        </card-body>
    </card>
</template>

<script>
import CategoriesTable from '@/admin/settings/Categories/CategoriesTable.vue';
import Card from '@/admin/components/Card/Card.vue';
import CardHead from '@/admin/components/Card/CardHead.vue';
import CardBody from '@/admin/components/Card/CardBody.vue';

export default {
    name: "Categories",
    components: {
        CategoriesTable,
        Card,
        CardHead,
        CardBody
    }
};
</script>
