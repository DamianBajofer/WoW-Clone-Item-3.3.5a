$(document).on("ready", () => {
	$("#clone").on("click", CloneItem)
})

const CloneItem = () => {
	
	const entry = document.getElementById("entry")
	const newEntry = document.getElementById("newEntry")
	const display = document.getElementById("display")
	const name = document.getElementById("name")
	const description = document.getElementById("description")
	const itemLevel = document.getElementById("itemLevel")
	const data = new FormData()
	data.append("entry", entry.value)
	data.append("newEntry", newEntry.value)
	data.append("display", display.value)
	data.append("name", name.value)
	data.append("description", description.value)
	data.append("itemLevel", itemLevel.value)
	const xhr = new XMLHttpRequest()
	xhr.open("POST", "./server/clone_item.controller.php", true)
	xhr.onload = (response) => {
		if(response.currentTarget.response > 0){
			$("#result").removeAttr("class").attr("class", "green")
			$("#result.green").html("Clonacion exitosa!")
		}else{
			$("#result").removeAttr("class").attr("class", "red")
			$("#result.red").html("Uups!, Algo salio mal!")
		}
		console.log(response.currentTarget.response)
	}
	xhr.send(data)
}