/*
Template Name: LT - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: contact user list Js File
*/

var userListData = '';
var editList = false;

// Fetch user data from Laravel API
var getDatabaseData = function (callback) {
    fetch('/api/superAdmins')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => callback(null, data))
        .catch(err => callback(err, null));
};

// Fetch data and load the user list
getDatabaseData(function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        userListData = data;
        loadUserList(userListData);
    }
});

function loadUserList(datas) {
    $('#userList-table').DataTable({
        data: datas,
        "bLengthChange": false,
        order: false,
        language: {
            oPaginate: {
                sNext: '<i class="mdi mdi-chevron-right"></i>',
                sPrevious: '<i class="mdi mdi-chevron-left"></i>',
            }
        },
        columns: [
            { data: "id", title: "ID" },
            { data: "name", title: "Name" },
            { data: "email", title: "Email" },
            {
                data: "role_id",
                title: "Role",
                render: function (data) {
                    switch (data) {
                        case 1:
                            return '<span class="badge badge-soft-primary">Owner</span>';
                        case 2:
                            return '<span class="badge badge-soft-success">Admin</span>';
                        case 3:
                            return '<span class="badge badge-soft-danger">Member</span>';
                        case 5:
                            return '<span class="badge badge-soft-secondary">Super Admin</span>';
                        case 6:
                            return '<span class="badge badge-soft-info">Super Owner</span>';
                        default:
                            return '<span class="badge badge-soft-secondary">Unknown</span>';
                    }
                }
            },
            { data: "whatsapp_number", title: "WhatsApp" },
            {
                data: null,
                title: "Actions",
                'bSortable': false,
                render: function (data, type, full) {
                    return `<ul class="list-inline font-size-20 contact-links mb-0">
                        <li class="list-inline-item">
                            <a href="#removeItemModal" data-bs-toggle="modal" class="dropdown-item remove-list" data-remove-id="${full.id}">
                                <i class="mdi mdi-trash-can text-danger"></i>
                            </a>
                        </li>
                    </ul>`;
                }
            },
        ],
        drawCallback: function (oSettings) {
            removeItem(); // Bind remove event
        },
    });

    $('#searchTableList').keyup(function () {
        $('#userList-table').DataTable().search($(this).val()).draw();
    });
    $(".dataTables_length select").addClass('form-select form-select-sm');
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}


// Edit functionality
function editContactList() {
    Array.from(document.querySelectorAll(".edit-list")).forEach(function (elem) {
        elem.addEventListener('click', function (event) {
            var getEditid = elem.getAttribute('data-edit-id');
            editList = true;
            document.getElementById("createContact-form").classList.remove("was-validated");
            userListData.map(function (item) {
                if (item.id == getEditid) {
                    document.getElementById("editModalLabel").innerHTML = "Edit User";
                    document.getElementById("addContact-btn").innerHTML = "Update";
                    document.getElementById("userid-input").value = item.id;
                    document.getElementById("username-input").value = item.name;
                    document.getElementById("email-input").value = item.email;
                }
                return item;
            });
        });
    });
}

// Remove functionality
function removeItem() {
    console.log("called")
    Array.from(document.querySelectorAll(".remove-list")).forEach(function (item) {
        item.addEventListener('click', function () {
            var getId = item.getAttribute('data-remove-id'); // Get the ID to delete
            document.getElementById("remove-item").addEventListener("click", function () {
                fetch(`/api/superAdmins/${getId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // Add CSRF token
                        'Authorization': `Bearer ${localStorage.getItem('token')}` // Add token if required
                    },
                })
                    .then(response => {
                        console.log(response)
                        if (!response.ok) {
                            if (response.status === 403) {
                                throw new Error('You are not authorized to delete this user.');
                            } else if (response.status === 404) {
                                throw new Error('User not found.');
                            }
                            throw new Error('Failed to delete user.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message); // Show success message
                        // Refresh the table
                        userListData = userListData.filter(user => user.id != getId);
                        if ($.fn.DataTable.isDataTable('#userList-table')) {
                            $('#userList-table').DataTable().destroy();
                        }
                        loadUserList(userListData);
                        $("#removeItemModal").modal("hide");
                    })
                    .catch(err => {
                        alert(err.message); // Show error message
                    });
            });
        });
    });
}

