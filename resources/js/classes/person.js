    export default class Person {
        constructor(name, age, nickname) {
            this.name=name;
            this.age=age;
            this.nickname=nickname;
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
    }