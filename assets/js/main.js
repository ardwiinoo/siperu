// Show hide Login Register
function changeLogReg() {
    const log = document.getElementById('log');
    const reg = document.getElementById('reg');

    if (log.style.display == 'block') {
        log.style.display = 'none';
        reg.style.display = 'block';
    } else {
        log.style.display = 'block';
        reg.style.display = 'none';
    }

}