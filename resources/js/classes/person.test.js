import Person from "./person";

var author = new Person("Ricky", "56", "The Danger");

test("Person class", ()=>{
    expect(author.getName()).toBe("Ricky")
})

test("Person class", ()=>{
    expect(author.getNickname()).toBe("The Danger")
})