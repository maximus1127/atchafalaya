<template>
    <table class="table table-data2">
        <thead>
            <tr>
                <th>
                    Active
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Message/Date</th>
                <th>Phone</th>
                <th>Add/View Notes</th>

                <!--  <th>price</th> -->
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="tr-shadow"
                v-for="client in clients"
                :data-active="client.active"
                :data-rowid="client.id"
                v-show="client.active"
            >
                <td>
                    <label class="au-checkbox">
                        <input
                            type="checkbox"
                            :checked="client.active"
                            @change="changed(client.id)"
                        />
                        <span class="au-checkmark"></span>
                    </label>
                </td>
                <td>{{ client.fname + " " + client.lname }}</td>
                <td>
                    {{ client.email }}
                </td>
                <td class="desc">
                    {{ client.message }}
                    <hr />
                    <small>at {{ client.updated_at }}</small>
                </td>
                <td>{{ client.phone }}</td>
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
                        <a href="#">
                            <button
                                class="item"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Add Notes"
                                @click="swaltest"
                            >
                                <i class="zmdi zmdi-edit"></i></button
                        ></a>
                        <!-- <button
                            class="item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="Archive"
                            @click="archive(client.id)"
                        >
                            <i class="zmdi zmdi-delete"></i>
                        </button> -->
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
            client: {}
        };
    },
    mounted() {
        axios.get("/get-client").then(response => {
            this.client = response.data.client;
        });
    },
    methods: {
        swaltest: function() {
            Swal.fire({
                title: "Error!",
                text: "Do you want to continue",
                icon: "error",
                confirmButtonText: "Cool"
            });
        }
        // archive: function(id) {
        //     axios.get("/archive-home/" + id).then(response => {
        //         $("tr[data-rowid=" + id + "]").fadeOut();
        //     });
        // }
    }
};
</script>
