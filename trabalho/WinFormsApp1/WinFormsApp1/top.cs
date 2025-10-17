using System;

namespace WinFormsApp1
{
    public partial class top : Form
    {
        public top()
        {
            InitializeComponent();


        }

        private void Listarproduto()
        {
            using (var db = new appDbcontext())
            {
                dgvcliente.DataSource = db.Produto.ToList();
            }
        }
        private void LimparCampos()
        {
            txtnome.Text = string.Empty;
            txtid.Text = string.Empty;
            txtdescricao.Text = string.Empty;
            txtpreco.Text = string.Empty;
            txtestoque.Text = string.Empty;
            txtnome.Focus();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void btninserir_Click(object sender, EventArgs e)
        {
            using (var db = new appDbcontext())
            {
                var pessoa = new Produto
                {
                    nome = txtnome.Text,
                    descricao = txtdescricao.Text,
                    preco = System.Convert.ToInt32(txtpreco.Text),
                    estoque = System.Convert.ToInt32(txtestoque.Text)
                };
                db.Produto.Add(pessoa);
                db.SaveChanges();
            }
            Listarproduto();
            LimparCampos();
        }

        private void dgvcliente_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void btnlistar_Click(object sender, EventArgs e)
        {
            Listarproduto();
        }

        private void btneditar_Click(object sender, EventArgs e)
        {
            using (var db = new appDbcontext())
            {
                int id = int.Parse(txtid.Text);
                var pessoa = db.Produto.Find(id);
                if (pessoa != null)
                {
                    pessoa.nome = txtnome.Text;
                    pessoa.descricao = txtdescricao.Text;
                    pessoa.preco = decimal.Parse(txtpreco.Text);
                    pessoa.estoque = System.Convert.ToInt32(txtestoque.Text);
                    db.SaveChanges();
                }
                else
                {

                }
            }
            LimparCampos();
            Listarproduto();
        }

        private void btnexcluir_Click(object sender, EventArgs e)
        {
            using (var db = new appDbcontext())
            {
                int id = int.Parse(txtid.Text);
                var pessoa = db.Produto.Find(id);
                if (pessoa != null)
                {
                    db.Produto.Remove(pessoa);
                    db.SaveChanges();
                }
            }
            LimparCampos();
            Listarproduto();
        }
    }
}

