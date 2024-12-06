const mockData = [
    { id: 1, customerName: 'Juan', customerLastName: 'Pérez', phoneNumber: '123456789', street: 'Calle 1', crossStreet: 'Calle A', neighborhood: 'Colonia 1' },
    { id: 2, customerName: 'María', customerLastName: 'López', phoneNumber: '987654321', street: 'Calle 2', crossStreet: 'Calle B', neighborhood: 'Colonia 2' },
    { id: 3, customerName: 'Carlos', customerLastName: 'García', phoneNumber: '456123789', street: 'Calle 3', crossStreet: 'Calle C', neighborhood: 'Colonia 3' }
];

let deliveryData = [...mockData]; // Usar los datos simulados
let nextId = 4; // Para nuevos registros

function fetchDeliveryOrders() {
    return new Promise((resolve) => {
        resolve(deliveryData);
    });
}

function createDeliveryOrder(order) {
    return new Promise((resolve) => {
        order.id = nextId++;
        deliveryData.push(order);
        resolve(order);
    });
}

function updateDeliveryOrder(id, updatedOrder) {
    return new Promise((resolve) => {
        const index = deliveryData.findIndex(order => order.id === id);
        if (index !== -1) {
            deliveryData[index] = { ...deliveryData[index], ...updatedOrder };
            resolve(deliveryData[index]);
        }
    });
}

function deleteDeliveryOrder(id) {
    return new Promise((resolve) => {
        deliveryData = deliveryData.filter(order => order.id !== id);
        resolve();
    });
}

