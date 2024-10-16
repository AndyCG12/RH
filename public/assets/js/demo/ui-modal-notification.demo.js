/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.3.2
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var handleGritterNotification = function() {
	$('#add-sticky').click( function() {
		$.gritter.add({
			title: 'This is a sticky notice!',
			text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat. ',
			image: '../assets/img/user/user-2.jpg',
			sticky: true,
			time: '',
			class_name: 'my-sticky-class'
		});
		return false;
	});
	$('#add-regular').click( function() {
		$.gritter.add({
			title: 'This is a regular notice!',
			text: 'This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ',
			image: '../assets/img/user/user-3.jpg',
			sticky: false,
			time: ''
		});
		return false;
	});
	$('#add-max').click( function() {
		$.gritter.add({
			title: 'This is a notice with a max of 3 on screen at one time!',
			text: 'This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ',
			sticky: false,
			image: '../assets/img/user/user-4.jpg',
			before_open: function() {
				if($('.gritter-item-wrapper').length === 3) {
					return false;
				}
			}
		});
		return false;
	});

//aqui comienza las notificaciones para crear, editar y eliminar.
$('#add-empleado').click(function(){
    $.gritter.add({
        title: 'This is a notice without an image! ',
        text: 'Se ha agregado el empleado: ' + employeeName
    });
    return false;
});
//aqui termina el codigo de notificaciones


	$('#add-without-image').click(function(){
		$.gritter.add({
			title: 'This is a notice without an image!',
			text: 'This will fade out after a certain amount of time.'
		});
		return false;
	});
	$('#add-gritter-light').click(function(){
		$.gritter.add({
			title: 'This is a light notification',
			text: 'Just add a \'gritter-light\' class_name to your $.gritter.add or globally to $.gritter.options.class_name',
			class_name: 'gritter-light'
		});
		return false;
	});
	$('#add-with-callbacks').click(function(){
		$.gritter.add({
			title: 'This is a notice with callbacks!',
			text: 'The callback is...',
			before_open: function(){
				alert('I am called before it opens');
			},
			after_open: function(e){
				alert('I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n' + e);
			},
			before_close: function(manual_close) {
				var manually = (manual_close) ? 'The \'X\' was clicked to close me!' : '';
				alert('I am called before it closes: I am passed the jQuery object for the Gritter element... \n' + manually);
			},
			after_close: function(manual_close){
				var manually = (manual_close) ? 'The \'X\' was clicked to close me!' : '';
				alert('I am called after it closes. ' + manually);
			}
		});
		return false;
	});
	$('#add-sticky-with-callbacks').click(function(){
		$.gritter.add({
			title: 'This is a sticky notice with callbacks!',
			text: 'Sticky sticky notice.. sticky sticky notice...',
			sticky: true,
			before_open: function(){
				alert('I am a sticky called before it opens');
			},
			after_open: function(e){
				alert('I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n' + e);
			},
			before_close: function(e){
				alert('I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n' + e);
			},
			after_close: function(){
				alert('I am a sticky called after it closes');
			}
		});
		return false;
	});
	$('#remove-all').click(function(){
		$.gritter.removeAll();
		return false;
	});
	$('#remove-all-with-callbacks').click(function(){
		$.gritter.removeAll({
			before_close: function(e){
				alert('I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n' + e);
			},
			after_close: function(){
				alert('I am called after everything has been closed.');
			}
		});
		return false;
	});




    function showEmployeeNotification(title, message, className) {
        $.gritter.add({
            title: title,
            text: message,
            class_name: className,
            sticky: false,
            time: 3000
        });
    }
};

var notification = $('#notification-data');
    if (notification.length) {
        var data = JSON.parse(notification.val());
        showEmployeeNotification(data.title, data.message, 'gritter-' + data.type);
    }



var handleSweetNotification = function() {
	$('[data-click="swal-primary"]').click(function(e) {
		e.preventDefault();
		swal({
			title: 'Are you sure?',
			text: 'You will not be able to recover this imaginary file!',
			icon: 'info',
			buttons: {
				cancel: {
					text: 'Cancel',
					value: null,
					visible: true,
					className: 'btn btn-default',
					closeModal: true,
				},
				confirm: {
					text: 'Primary',
					value: true,
					visible: true,
					className: 'btn btn-primary',
					closeModal: true
				}
			}
		});
	});

	$('[data-click="swal-info"]').click(function(e) {
		e.preventDefault();
		swal({
			title: 'Are you sure?',
			text: 'You will not be able to recover this imaginary file!',
			icon: 'info',
			buttons: {
				cancel: {
					text: 'Cancel',
					value: null,
					visible: true,
					className: 'btn btn-default',
					closeModal: true,
				},
				confirm: {
					text: 'Info',
					value: true,
					visible: true,
					className: 'btn btn-info',
					closeModal: true
				}
			}
		});
	});

	$('[data-click="swal-success"]').click(function(e) {
		e.preventDefault();
		swal({
			title: 'Are you sure?',
			text: 'You will not be able to recover this imaginary file!',
			icon: 'success',
			buttons: {
				cancel: {
					text: 'Cancel',
					value: null,
					visible: true,
					className: 'btn btn-default',
					closeModal: true,
				},
				confirm: {
					text: 'Success',
					value: true,
					visible: true,
					className: 'btn btn-success',
					closeModal: true
				}
			}
		});
	});

	$('[data-click="swal-warning"]').click(function(e) {
		e.preventDefault();
		swal({
			title: 'Are you sure?',
			text: 'You will not be able to recover this imaginary file!',
			icon: 'warning',
			buttons: {
				cancel: {
					text: 'Cancel',
					value: null,
					visible: true,
					className: 'btn btn-default',
					closeModal: true,
				},
				confirm: {
					text: 'Warning',
					value: true,
					visible: true,
					className: 'btn btn-warning',
					closeModal: true
				}
			}
		});
	});

	$('[data-click="swal-danger"]').click(function(e) {
		e.preventDefault();
		swal({
			title: 'Are you sure?',
			text: 'You will not be able to recover this imaginary file!',
			icon: 'error',
			buttons: {
				cancel: {
					text: 'Cancel',
					value: null,
					visible: true,
					className: 'btn btn-default',
					closeModal: true,
				},
				confirm: {
					text: 'Warning',
					value: true,
					visible: true,
					className: 'btn btn-danger',
					closeModal: true
				}
			}
		});
	});
};


var Notification = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleGritterNotification();
			handleSweetNotification();
		}
	};
}();

$(document).ready(function() {
	Notification.init();
});

function showEmployeeNotification(title, message, className) {
    $.gritter.add({
        title: title,
        text: message,
        class_name: className,
        sticky: false,
        time: 3000
    });
}
/* $(document).on('click', '.btn-add-employee, .btn-edit-employee, .btn-delete-employee', function(e) {
    e.preventDefault();

    var action = $(this).hasClass('btn-add-employee') ? 'add' : ($(this).hasClass('btn-edit-employee') ? 'edit' : 'delete');
    var employeeName = $(this).data('name') || 'Empleado';
    var employeeId = $(this).data('id'); // Solo aplicable a editar/eliminar

    var formAction, method, title, message, className;

    switch(action) {
        case 'add':
            title = 'Empleado Agregado';
            message = 'Se ha agregado el empleado: ' + employeeName;
            className = 'gritter-success';
            formAction = '{{ route("empleados.store") }}';  // Ruta para agregar
            method = 'POST';
            break;
        case 'edit':
            title = 'Empleado Actualizado';
            message = 'Se ha actualizado el empleado: ' + employeeName;
            className = 'gritter-info';
            formAction = '{{ route("empleados.edit") }}' + employeeId;  // Ruta para editar
            method = 'PUT';
            break;
        case 'delete':
            title = 'Empleado Eliminado';
            message = 'Se ha eliminado el empleado: ' + employeeName;
            className = 'gritter-warning';
            formAction = '/empleados/' + employeeId;  // Ruta para eliminar
            method = 'DELETE';
            break;
    }

    // Configurar el formulario correspondiente
    var form = $(this).closest('form');
    form.attr('action', formAction);
    form.find('input[name="_method"]').val(method);

    // Mostrar la notificación
    showEmployeeNotification(title, message, className);

    // Enviar el formulario después de la notificación
    setTimeout(function() {
        form.submit();  // Enviar el formulario
    }, 1000);  // Espera 1 segundo para mostrar la notificación */

