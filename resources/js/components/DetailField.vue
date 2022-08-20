<template>
    <PanelItem :index="index" :field="field" >
        <template #value>
            <div>{{ formattedField.value }}</div>
        </template>
    </PanelItem>
</template>

<script>
import numeral from "numeral";

export default {
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

    mounted() {
        if(typeof this.field.value === 'number') {
            this.formattedField.value = numeral(this.field.value).format(this.field.format);
        }
    },

    data() {
        return {
            formattedField: this.field
        };
    }
}
</script>
