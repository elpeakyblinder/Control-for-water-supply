const mqtt = require("mqtt");

const options = {
    connectTimeout: 4000,
    clientId: "emqx",
    keepalive: 60,
    clean: true,
};

const WebSocket_URL = "ws://192.168.0.112:8083/mqtt";
const client = mqtt.connect(WebSocket_URL, options);

client.on("connect", () => {
    console.log("Conexión Realizada");
});

client.on("reconnect", (error) => {
    console.log("Reconectando:", error);
});

client.on("error", (error) => {
    console.log("Error de Conección: ", error);
});

client.on("message", (topic, mensaje) => {
    console.log("Recibido de", topic, ":", mensaje.toString());
    var index = mensaje.toString().indexOf("F1-0");
    if (index >= 0) {
        console.log("Esta apagado");
    } else {
        console.log("Esta encendido");
    }
});

if (!client.connected) {
    console.log("Cliente no conectado");
}

client.subscribe("salida", (err) => {
    console.log(err || "Suscripción realizada");
});

const status = process.argv[2]; // Esto será '1' o '0'

function encender(value) {
    client.publish("entrada", value, (error) => {
        console.log(error || "Publicación realizada");
    });
}

encender(status);
