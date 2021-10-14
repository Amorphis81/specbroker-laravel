addEventListener('DOMContentLoaded', () => {
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginImageEdit
    );

    FilePond.setOptions({
        allowMultiple: true,
        className: 'input'
    });

    const inputs = document.querySelectorAll('[data-name=file-upload]');

    inputs.forEach(input => {
        FilePond.create(
            input
        );
    })

})
