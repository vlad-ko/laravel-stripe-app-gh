import Person from "./person";

var author = new Person("Webert", "61");

test("Person class", ()=>{
    expect(author.getName()).toBe("Webert")
})