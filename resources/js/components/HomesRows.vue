<template>
    <table class="table table-data2">
        <thead>
            <tr>
                <th>
                    Show On Home
                </th>
                <th>Title</th>
                <!-- <th>Features</th> -->
                <th>Main Image</th>
                <th>Type</th>
                <th>Options</th>

                <!--  <th>price</th> -->
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="tr-shadow"
                v-for="home in homes"
                :data-hometype="home.home_type"
                :data-rowid="home.id"
            >
                <td>
                    <label class="au-checkbox">
                        <input
                            type="checkbox"
                            :checked="home.show_on_home"
                            @change="changed(home.id)"
                        />
                        <span class="au-checkmark"></span>
                    </label>
                </td>
                <td>{{ home.title }}</td>
                <!-- <td>
                    <ul>
                        <li v-for="feature in home.features">{{ feature }}</li>
                    </ul>
                </td> -->
                <td class="desc">
                    <img
                        :src="home.main_image"
                        :style="{
                            width: '150px',
                            height: '100px'
                        }"
                    />
                </td>
                <td>{{ home.home_type }}</td>
                <!--   <td>
                    <span class="status--process">Processed</span>
                </td>
                <td>$679.00</td> -->
                <td>
                    <div
                        class="table-data-feature"
                        :style="{
                            justifyContent: 'left'
                        }"
                    >
                        <!-- <button
                            class="item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="Send"
                        >
                            <i class="zmdi zmdi-mail-send"></i>
                        </button> -->
                        <a :href="'/edit-property/' + home.id">
                            <button
                                class="item"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Edit"
                            >
                                <i class="zmdi zmdi-edit"></i></button
                        ></a>
                        <button
                            class="item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="Archive"
                            @click="archive(home.id)"
                        >
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- <button
                            class="item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="More"
                        >
                            <i class="zmdi zmdi-more"></i>
                        </button> -->
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            homes: []
        };
    },
    mounted() {
        axios.get("/get-homes").then(response => {
            this.homes = response.data.mobileHomes;
        });
    },
    methods: {
        changed: function(id) {
            axios.post("/update-show-on-home/" + id);
        },
        archive: function(id) {
            axios.get("/archive-home/" + id).then(response => {
                $("tr[data-rowid=" + id + "]").fadeOut();
            });
        }
    }
};
</script>
