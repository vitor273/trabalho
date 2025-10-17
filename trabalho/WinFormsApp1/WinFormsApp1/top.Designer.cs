namespace WinFormsApp1
{
    partial class top
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            label1 = new Label();
            btninserir = new Button();
            txtid = new TextBox();
            dgvcliente = new DataGridView();
            btnlistar = new Button();
            btneditar = new Button();
            btnexcluir = new Button();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            txtdescricao = new TextBox();
            txtpreco = new TextBox();
            txtestoque = new TextBox();
            txtnome = new TextBox();
            label5 = new Label();
            ((System.ComponentModel.ISupportInitialize)dgvcliente).BeginInit();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 25);
            label1.Name = "label1";
            label1.Size = new Size(17, 15);
            label1.TabIndex = 0;
            label1.Text = "id";
            // 
            // btninserir
            // 
            btninserir.Location = new Point(801, 43);
            btninserir.Name = "btninserir";
            btninserir.Size = new Size(116, 62);
            btninserir.TabIndex = 1;
            btninserir.Text = "inserir";
            btninserir.UseVisualStyleBackColor = true;
            btninserir.Click += btninserir_Click;
            // 
            // txtid
            // 
            txtid.Location = new Point(12, 43);
            txtid.Name = "txtid";
            txtid.Size = new Size(276, 23);
            txtid.TabIndex = 2;
            // 
            // dgvcliente
            // 
            dgvcliente.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dgvcliente.Location = new Point(12, 487);
            dgvcliente.Name = "dgvcliente";
            dgvcliente.RowTemplate.Height = 25;
            dgvcliente.Size = new Size(890, 75);
            dgvcliente.TabIndex = 3;
            dgvcliente.CellContentClick += dgvcliente_CellContentClick;
            // 
            // btnlistar
            // 
            btnlistar.Location = new Point(801, 144);
            btnlistar.Name = "btnlistar";
            btnlistar.Size = new Size(116, 62);
            btnlistar.TabIndex = 4;
            btnlistar.Text = "listar";
            btnlistar.UseVisualStyleBackColor = true;
            btnlistar.Click += btnlistar_Click;
            // 
            // btneditar
            // 
            btneditar.Location = new Point(801, 252);
            btneditar.Name = "btneditar";
            btneditar.Size = new Size(116, 62);
            btneditar.TabIndex = 5;
            btneditar.Text = "atualizar";
            btneditar.UseVisualStyleBackColor = true;
            btneditar.Click += btneditar_Click;
            // 
            // btnexcluir
            // 
            btnexcluir.Location = new Point(801, 356);
            btnexcluir.Name = "btnexcluir";
            btnexcluir.Size = new Size(116, 62);
            btnexcluir.TabIndex = 6;
            btnexcluir.Text = "excluir";
            btnexcluir.UseVisualStyleBackColor = true;
            btnexcluir.Click += btnexcluir_Click;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 126);
            label2.Name = "label2";
            label2.Size = new Size(57, 15);
            label2.TabIndex = 7;
            label2.Text = "descriçao";
            label2.Click += label2_Click;
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(12, 180);
            label3.Name = "label3";
            label3.Size = new Size(49, 15);
            label3.TabIndex = 8;
            label3.Text = "estoque";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(13, 234);
            label4.Name = "label4";
            label4.Size = new Size(37, 15);
            label4.TabIndex = 9;
            label4.Text = "preço";
            // 
            // txtdescricao
            // 
            txtdescricao.Location = new Point(12, 144);
            txtdescricao.Name = "txtdescricao";
            txtdescricao.Size = new Size(276, 23);
            txtdescricao.TabIndex = 10;
            // 
            // txtpreco
            // 
            txtpreco.Location = new Point(12, 198);
            txtpreco.Name = "txtpreco";
            txtpreco.Size = new Size(276, 23);
            txtpreco.TabIndex = 11;
            // 
            // txtestoque
            // 
            txtestoque.Location = new Point(12, 252);
            txtestoque.Name = "txtestoque";
            txtestoque.Size = new Size(276, 23);
            txtestoque.TabIndex = 12;
            // 
            // txtnome
            // 
            txtnome.Location = new Point(12, 100);
            txtnome.Name = "txtnome";
            txtnome.Size = new Size(276, 23);
            txtnome.TabIndex = 13;
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(12, 82);
            label5.Name = "label5";
            label5.Size = new Size(38, 15);
            label5.TabIndex = 14;
            label5.Text = "nome";
            // 
            // top
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackgroundImage = Properties.Resources.top;
            BackgroundImageLayout = ImageLayout.Stretch;
            ClientSize = new Size(929, 574);
            Controls.Add(label5);
            Controls.Add(txtnome);
            Controls.Add(txtestoque);
            Controls.Add(txtpreco);
            Controls.Add(txtdescricao);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(btnexcluir);
            Controls.Add(btneditar);
            Controls.Add(btnlistar);
            Controls.Add(dgvcliente);
            Controls.Add(txtid);
            Controls.Add(btninserir);
            Controls.Add(label1);
            Name = "top";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Loja Top";
            Load += Form1_Load;
            ((System.ComponentModel.ISupportInitialize)dgvcliente).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Button btninserir;
        private TextBox txtid;
        private DataGridView dgvcliente;
        private Button btnlistar;
        private Button btneditar;
        private Button btnexcluir;
        private Label label2;
        private Label label3;
        private Label label4;
        private TextBox txtdescricao;
        private TextBox txtpreco;
        private TextBox txtestoque;
        private TextBox txtnome;
        private Label label5;
    }
}