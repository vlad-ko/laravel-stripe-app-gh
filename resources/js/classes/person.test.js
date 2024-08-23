import Person from "./person";

var person = new Person("Ricky", "56", "The Danger", "Bobby");

test("Person class", ()=>{
    expect(person.getName()).toBe("Ricky")
})

test("Person class", ()=>{
    expect(person.getNickname()).toBe("The Danger")
})

test("Person class", ()=>{
    expect(person.getLastName()).toBe("Bobby")
})

test("Person class", ()=>{
    expect(person.getEleven()).toBe(11)
})

test("Person class", ()=>{
    expect(person.getAccessLevel()).toBe('admin');
})

test("Person class", ()=>{
    expect(person.getMenuOptions()).toBe('menu options');
})

test("Person class", ()=>{
    expect(person.getPersonalData()).toBe('secret data');
})

test("Person class", ()=>{
    expect(person.getSomeMoreInfo()).toBe('more info');
})

test("Person class", ()=>{
    expect(person.getStaffName()).toBe('staff name');
})

test("Person class", ()=>{
    expect(person.getStatus()).toBe('status');
})