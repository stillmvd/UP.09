// function checkForm() {
//     let loginGap = document.getElementById('login');
//     let emailGap = document.getElementById('email');
//     let passwordGap = document.getElementById('password');
//     let confirmPasswordGap = document.getElementById('confirmPassword');
//     let formButton = document.getElementById('formButton');
// }

// function finalCheck() {
//     let dogCheck = '@';
//     let loginGap = document.getElementById('login');
//     let emailGap = document.getElementById('email');
//     let passwordGap = document.getElementById('password');
//     let confirmPasswordGap = document.getElementById('confirmPassword');
//     let alertPlace = document.getElementById('alert');
//     if(loginGap.classList.contains('emptyGap') === true || emailGap.classList.contains('emptyGap') === true || passwordGap.classList.contains('emptyGap') === true || confirmPasswordGap.classList.contains('emptyGap') === true){
//         alertPlace.classList.remove('hidden');
//         loginGap.classList.add('badGap');
//         emailGap.classList.add('badGap');
//         passwordGap.classList.add('badGap');
//         confirmPasswordGap.classList.add('badGap');
//     }
//
//     loginGap.addEventListener('focus', () => {
//         loginGap.classList.remove('badGap');
//         let timer = setInterval(() => {
//             if (loginGap.value.length > 0){
//                 loginGap.classList.remove('emptyGap');
//             } else if (loginGap.value.length === 0){
//                 loginGap.classList.add('emptyGap');
//             }
//         },10)
//         loginGap.addEventListener('blur', () => {
//             if (loginGap.classList.contains('emptyGap') === true || loginGap.value.length < 4){
//                 loginGap.classList.add('badGap');
//             }
//             clearInterval(timer);
//         })
//     })
//
//     emailGap.addEventListener('focus', () => {
//         emailGap.classList.remove('badGap');
//         let timer = setInterval(() => {
//             if (emailGap.value.length > 0){
//                 emailGap.classList.remove('emptyGap');
//             } else if (emailGap.value.length === 0){
//                 emailGap.classList.add('emptyGap');
//             }
//         },10)
//         emailGap.addEventListener('blur', () => {
//             if (emailGap.classList.contains('emptyGap') === true || emailGap.value.length < 5 || emailGap.value.indexOf(dogCheck) === -1){
//                 emailGap.classList.add('badGap');
//             }
//             clearInterval(timer);
//         })
//     })
//
//     passwordGap.addEventListener('focus', () => {
//         passwordGap.classList.remove('badGap');
//         let timer = setInterval(() => {
//             if (passwordGap.value.length > 0){
//                 passwordGap.classList.remove('emptyGap');
//             } else if (passwordGap.value.length === 0){
//                 confirmPasswordGap.classList.add('emptyGap');
//             }
//         },10)
//         passwordGap.addEventListener('blur', () => {
//             if (passwordGap.classList.contains('emptyGap') === true || passwordGap.value.length < 6){
//                 passwordGap.classList.add('badGap');
//             }
//             clearInterval(timer);
//         })
//     })
//
//     confirmPasswordGap.addEventListener('focus', () => {
//         confirmPasswordGap.classList.remove('badGap');
//         let timer = setInterval(() => {
//             if (confirmPasswordGap.value.length > 0){
//                 confirmPasswordGap.classList.remove('emptyGap');
//             } else if (confirmPasswordGap.value.length === 0){
//                 confirmPasswordGap.classList.add('emptyGap');
//             }
//         },10)
//         confirmPasswordGap.addEventListener('blur', () => {
//             if (confirmPasswordGap.classList.contains('emptyGap') === true || confirmPasswordGap.value.length < 6){
//                 confirmPasswordGap.classList.add('badGap');
//             }
//             clearInterval(timer);
//         })
//     })
// }
