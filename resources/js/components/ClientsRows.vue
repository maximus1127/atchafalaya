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
                    <small v-if="client.last_note != null"
                        >Last active: {{ client.last_note.created_at }}</small
                    >
                    <small v-else>Last active: {{ client.updated_at }}</small>
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
                                @click="viewNotes(client.id, client.fname)"
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
            clients: []
        };
    },
    mounted() {
        axios.get("/interactions").then(response => {
            console.log(response.data);
            this.clients = response.data.clients;
        });
    },
    methods: {
        changed: function(id) {
            axios.post("/update-client-active/" + id);
        },
        viewNotes: function(id, name) {
            $.ajax({
                url: "/get-all-notes",
                type: "get",
                data: {
                    id: id
                },
                success: function(data) {
                    Swal.fire({
                        title: name,
                        html: data.html,
                        confirmButtonText: "Done"
                    });
                }
            });
        }
    }
};
</script>
