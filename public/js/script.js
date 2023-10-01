const menuDataMaster = document.querySelector('#btnDataMaster');
const subMenuDataMaster = document.querySelector('#dropdownMenu');

menuDataMaster.addEventListener('click', function(){
    subMenuDataMaster.classList.toggle('hidden');
});

const checkboxMode = document.querySelector('#checkboxMode');
const html = document.querySelector('html');

checkboxMode.addEventListener('click', function(){
    checkboxMode.checked ? html.classList.add('dark') : html.classList.remove('dark');
});
