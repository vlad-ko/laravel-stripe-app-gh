    export default class Person {
        constructor(name, age, nickname, lastName) {
            this.name=name;
            this.age=age;
            this.nickname=nickname;
            this.lastName=lastName;
        }

        getName() {
            return this.name;                
        }

        getAge() {
            return this.age;
        }

        getNickname() {
            return this.nickname;
        }

        getLastName() {
            return this.lastName;
        }

        getSomeOtherAttr() {
            return null;
        }

        getEleven() {
            return 11;
        }

        getAccessLevel() {
            return 'admin';
        }

        getMenuOptions() {
            return 'menu options';
        }

        getPersonalData() {
            return 'secret data';
        }
    }